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

        /**
         *  Redirecionamiento automatico para que el usuario que no esté autenticados (guests)
         */
        $middleware->redirectGuestsTo(function () {
            Session::flash('warning', 'Para acceder a esta area deve iniciar la sección!');
            return route('auth.login.show');
        });

        /**
         * Registro del alias del middleware personalizado (roleMiddleware)
         * Necesario en laravel 11, por lo que leí, ya que no hay un karnel.php según informes de google
         */
        $middleware->alias([
            'role' => \App\Http\Middleware\RoleMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->create();
