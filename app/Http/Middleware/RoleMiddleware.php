<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect()->route('auth.login.show')->with('error', 'Por favor, faça login primeiro.');
        }

        $user = Auth::user();

        if (!in_array($user->role, $roles)) {
            return redirect()->route('auth.login.show')->with('error', 'Acesso não autorizado.');
        }

        return $next($request);
    }
}
