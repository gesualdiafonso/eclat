<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Estilos;
use App\Models\Modelos;
use App\Models\Pedidos;
use App\Models\Post;
use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {

        $totalServicios = Servicio::count();
        $totalPosts = Post::count();
        $totalModelos = Modelos::count();
        $totalPedidos = Pedidos::count();
        $allModelos = Modelos::all();
        $allServicios = Servicio::all();
        $allPosts = Post::all();
        $allPedidos = Pedidos::all();
        $userPaginated = User::paginate(2);

        return view('admin.dashboard', compact('totalServicios', 'totalPosts', 'totalModelos', 'totalPedidos', 'allModelos', 'allServicios', 'allPosts', 'allPedidos', 'userPaginated'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');

        if (!$query) {
            return redirect()->back()->with('warning', 'Digite algo para buscar.');
        }

        // Busca global em todos os módulos
        $modelos = Modelos::where('name', 'like', "%{$query}%")
            ->orWhere('ubicacion', 'like', "%{$query}%")
            ->orWhere('instagram', 'like', "%{$query}%")
            ->get();

        $posts = Post::where('name', 'like', "%{$query}%")
            ->orWhere('slug', 'like', "%{$query}%")
            ->orWhere('author', 'like', "%{$query}%")
            ->get();

        $servicios = Servicio::where('name', 'like', "%{$query}%")
            ->orWhere('slug', 'like', "%{$query}%")
            ->orWhere('category', 'like', "%{$query}%")
            ->get();

        $categoria = Categoria::where('name', 'like', "%{$query}%")
            ->get();

        $estilos = Estilos::where('name', 'like', "%{$query}%")
            ->get();

        $users = User::where('name', 'like', "%{$query}%")
            ->orWhere('email', 'like', "%{$query}%")
            ->get();

        return view('admin.search', compact(
            'query',
            'modelos',
            'posts',
            'servicios',
            'categoria',
            'estilos',
            'users'
        ));
    }
}