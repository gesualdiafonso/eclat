<?php

namespace App\Http\Controllers;


use App\Models\PedidoModelo;
use App\Models\Pedidos;
use App\Models\PedidoServicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{

    // Confirmar / finalizar criar el pedido real
    public function finalize(Request $request)
    {
        $pedidoSession = session('pedido', ['modelos' => [], 'servicios' => []]);

        if (empty($pedidoSession['modelos']) && empty($pedidoSession['servicios'])) {
            return back()->with('warning', 'No hay items seleccionados.');
        }

        if (!Auth::check()) {
            // irá redirecionar para el registro/login y mantener la sesión
            return redirect()->route('auth.register')->with('info', 'Regístrate para finalizar tu solicitud.');
        }

        $user = Auth::user();

        // Cria pedido
        $pedido = Pedidos::create([
            'user_id' => $user->id,
            'status' => 'pendente',
            'notes' => $request->input('notes')
        ]);

        // persistir modelos
        foreach ($pedidoSession['modelos'] ?? [] as $m) {
            PedidoModelo::create([
                'pedido_id' => $pedido->id,
                'modelo_id' => $m['id'],
                'quantity' => $m['quantity'] ?? 1
            ]);
        }

        // persistir serivcios
        foreach ($pedidoSession['servicios'] ?? [] as $s) {
            PedidoServicio::create([
                'pedido_id' => $pedido->id,
                'servico_id' => $s['id'],
                'quantity' => $s['quantity'] ?? 1
            ]);
        }

        // limpiar la sesión
        session()->forget('pedido');

        return redirect()->route('client.profile')->with('success', 'Solicitud enviada con éxito.');
    }
}
