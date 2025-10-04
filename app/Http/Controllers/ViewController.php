<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Post;
use App\Models\Modelos;

class ViewController extends Controller
{
    /**
     * @var \Illuminate\Support\Collection|\App\Models\Servicio[] $servicios
     */

    public function home(){
        $servicios = Servicio::all();

        $lastPost = Post::latest()->first();

        $modelos = Modelos::all();

        return view('home', [
            'servicios' => $servicios,
            'ultimoPost' => $lastPost,
            'modelos' => $modelos
        ]);
    }
}