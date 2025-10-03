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

    public function process(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|exist:users'
        // ]);
        $credentials = $request->only(['email', 'password']);
        if(Auth::attempt($credentials)){
            return to_route('admin.dashboard')->with('success', 'Bienvenido a la Admin');
        }

        return back(fallback: route('auth.login.show'))->withInput()->with('warning', 'Las credenciales ingresadas no coinciden con nuestros registros');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('auth.login.show')->with('Success', 'Sesión cerrada con éxito.');
    }
}