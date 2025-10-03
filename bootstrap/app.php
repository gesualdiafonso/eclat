<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Session;

// function redirectToLogin(){
//         Session::flash('warning', 'Para acceder a esta area deve iniciar la sección!');
//         return route('auth.login.show');
// }

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // Para configurar a dónde queremos redireccionar a los usuarios
        // Cuando no están autenticados.
        //$middleware->redirectGuestsTo('/login');

        //Usado para la URL, como ya está antes, siend "practico"
        // Pero saca un erro crudo de PHP diciendo que no está!
        //$middleware->redirectGuestsTo(route('auth.login.show'));

        $middleware->redirectGuestsTo(function() {
            Session::flash('warning', 'Para acceder a esta area deve iniciar la sección!');
            return route('auth.login.show');
        });

        // Arrow function usados para simplificar el código, pero las arrow function en PHP solo puede:
        // usar la Kayword "fn"
        // Acepta 1 solo argumento de retorno, no permite un cuerpo
        // No dfinen un Scope propio.
        // $middleware->redirectGuestsTo(fn () => redirectToLogin());
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
