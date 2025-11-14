<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos;

use Illuminate\Routing\Controller as BaseController;

class AdminPedidoController extends BaseController
{
    public function __construct()
    {
        // aplicar middleware de admin
        $this->middleware('auth');
    }

    public function index()
    {
        $pedidos = Pedidos::with(['user','modelos.modelo','servicos.servico'])->orderByDesc('created_at')->get();
        return view('admin.pedidos.index', compact('pedidos'));
    }

    public function show(Pedidos $pedido)
    {
        $pedido->load(['user','modelos.modelo','servicos.servico']);
        return view('admin.pedidos.show', compact('pedido'));
    }
}
