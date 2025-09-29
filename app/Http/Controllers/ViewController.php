<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Post;

class ViewController extends Controller
{
    /**
     * @var \Illuminate\Support\Collection|\App\Models\Servicio[] $servicios
     */

    public function home(){
        $servicios = Servicio::all();

        $lastPost = Post::latest()->first();

        return view('welcome', [
            'servicios' => $servicios,
            'ultimoPost' => $lastPost,
        ]);
    }

    public function about(){
        return view('about');
    }
}