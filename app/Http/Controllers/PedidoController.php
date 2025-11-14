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
        // pega shortlist
        $pedidoSession = [
            'modelos' => session('shortlist.modelo', []),
            'servicios' => session('shortlist.servicio', [])
        ];

        if (empty($pedidoSession['modelos']) && empty($pedidoSession['servicios'])) {
            return back()->with('warning', 'No hay items seleccionados.');
        }

        if (!Auth::check()) {
            return redirect()->route('auth.register')
                ->with('info', 'Regístrate para finalizar tu solicitud.');
        }

        $user = Auth::user();

        // criar pedido
        $pedido = Pedidos::create([
            'user_id' => $user->id,
            'status' => 'pendente',
            'notes' => $request->input('notes')
        ]);

        // persistir modelos
        foreach ($pedidoSession['modelos'] as $id) {
            PedidoModelo::create([
                'pedido_id' => $pedido->id,
                'modelo_id' => $id,
                'quantity' => 1
            ]);
        }

        // persistir servicios
        foreach ($pedidoSession['servicios'] as $id) {
            PedidoServicio::create([
                'pedido_id' => $pedido->id,
                'servicio_id' => $id,
                'quantity' => 1
            ]);
        }

        // limpar shortlist
        session()->forget('shortlist.modelo');
        session()->forget('shortlist.servicio');

        return redirect()->route('client.profile')
            ->with('success', 'Solicitud enviada con éxito.');
    }

}
