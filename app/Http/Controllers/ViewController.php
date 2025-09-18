<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{

    public function home(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }
}