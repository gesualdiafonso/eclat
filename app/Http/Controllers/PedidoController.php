<?php

namespace App\Http\Controllers;


use App\Models\PedidoModelo;
use App\Models\Pedidos;
use App\Models\PedidoServicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    // Agrego modelo a la seción
    public function addModeloToSession(Request $request)
    {
        $request->validate([
            'modelo_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);

        $modeloId = $request->modelo_id;
        $items = session('pedido.modelos', []);

        // Icrementando la quantidad si existe
        $found = false;
        foreach($items as $it){
            if($it['id'] === $modeloId){
                $it['quantity']++;
                $found = true;
                break;
            }
        }
        if(!$found){
            $items[] = ['id' => $modeloId, 'quantity' => 1];
        }

        session(['pedido.modelos' => $items]);

        return response()->json(['message' => 'Modelo agregado al pedido en sesión.']);
    }

    public function removeModeloFromSession(Request $request)
    {
        $request->validate([
            'modelo_id' => 'required|integer',
        ]);

        $modeloId = (int) $request->modelo_id;
        $items = session('pedido.modelos', []);

        $items = array_filter($items, fn($it) => $it['id'] !== $modeloId);
        session(['pedido.modelos' => array_values($items)]);

        return response()->json(['message' => 'Modelo removido del pedido en sesión.']);
    }

    // Servicio (similar a modelo)
    public function addServicoToSession(Request $request)
    {
        $request->validate(['servico_id' => 'required|integer']);
        $servicoId = (int) $request->servico_id;
        $items = session('pedido.servicos', []);

        $found = false;
        foreach ($items as &$it) {
            if ($it['id'] === $servicoId) {
                $it['quantity']++;
                $found = true;
                break;
            }
        }
        if (!$found) {
            $items[] = ['id' => $servicoId, 'quantity' => 1];
        }

        session(['pedido.servicos' => $items]);

        return response()->json(['ok' => true, 'pedido' => session('pedido')]);
    }

    public function removeServicoFromSession(Request $request)
    {
        $request->validate(['servico_id' => 'required|integer']);
        $servicoId = (int) $request->servico_id;
        $items = session('pedido.servicos', []);

        $items = array_filter($items, fn($i) => $i['id'] !== $servicoId);
        session(['pedido.servicos' => array_values($items)]);

        return response()->json(['ok' => true, 'pedido' => session('pedido')]);
    }

    // Mostrar sesión actual (prara presentar al front)
    public function sessionShow()
    {
        return response()->json([
            'pedido' => session('pedido', ['modelos' => [], 'servicos' => []])
        ]);
    }

    // Confirmar / finalizar criar el pedido real
    public function finalize(Request $request)
    {
        $pedidoSession = session('pedido', ['modelos' => [], 'servicos' => []]);

        if (empty($pedidoSession['modelos']) && empty($pedidoSession['servicos'])) {
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
        foreach ($pedidoSession['servicos'] ?? [] as $s) {
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
