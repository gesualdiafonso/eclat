<?php

namespace App\Http\Controllers;

use App\Models\Modelos;
use App\Models\Post;
use App\Models\Servicio;

class AdminController extends Controller
{
    public function dashboard()
    {

        $totalServicios = Servicio::count();
        $totalPosts = Post::count();
        $totalModelos = Modelos::count();


        return view('admin.dashboard', compact('totalServicios', 'totalPosts', 'totalModelos'));
    }
}