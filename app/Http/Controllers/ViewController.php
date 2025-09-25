<?php

namespace App\Http\Controllers;

use App\Models\Servicio;

class ViewController extends Controller
{

    public function home(){
        $servicios = Servicio::all();

        return view('welcome', compact('servicios'));
    }

    public function about(){
        return view('about');
    }
}