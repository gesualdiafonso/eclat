<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:120',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Creo la seguridad del usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'client',
        ]);

        // Login autonmático
        Auth::login($user);

        // Redirecionamiento para el painel del cliente
        return to_route('client.profile')->with('sucess', 'Cuenta Creada con éxito!!');
    }
}