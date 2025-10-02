<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function porcess(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if(Auth::attempt($credentials)){
            return to_route('admin.dashboard')-with('feedback.message', 'Bienvenido a la Admin');
        }

        return back(fallback: route('auth.login'))->withInput()->with('error', 'Las credenciales ingresadas no coinciden con nuestros registros');
    }
}