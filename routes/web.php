<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [\App\Http\Controllers\ViewController::class, 'home'])->name('home');

Route::get('/modelos', [\App\Http\Controllers\ModelosController::class, 'index'])->name('modelos.index');

Route::get('/modelos/{id}', [\App\Http\Controllers\ModelosController::class, 'show'])->name('modelos.show');

Route::get('/servicios', [\App\Http\Controllers\ServiciosController::class, 'index'])->name('servicios.index');

Route::get('/servicios/{id}', [\App\Http\Controllers\ServiciosController::class, 'show'])->name('servicios.show');

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('post.index');

Route::get('/post/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');

// Rota de Login y Logou
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'show'])->name('auth.login.show')->middleware('guest');

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'process'])->name('auth.login.process')->middleware('guest');

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('auth.register');

Route::post('/register', [\App\Http\Controllers\AuthController::class, 'registerProcess'])->name('auth.register.process');

Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');


// ****************************************************
// ******************* Para Admin *********************
// ****************************************************

Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {

    // Rota central del admin
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('/search', [\App\Http\Controllers\AdminController::class, 'search'])
        ->name('search');;

    // Rota del servicios
    Route::prefix('servicios')->name('servicios.')->group(function () {
        Route::get('/', [\App\Http\Controllers\ServiciosController::class, 'servicios'])->name('index');
        Route::get('/create', [\App\Http\Controllers\ServiciosController::class, 'create'])->name('create');
        Route::post('/', [\App\Http\Controllers\ServiciosController::class, 'store'])->name('store');
        Route::get('/{id}', [\App\Http\Controllers\ServiciosController::class, 'details'])->name('details');
        Route::put('/{id}', [\App\Http\Controllers\ServiciosController::class, 'update'])->name('update');
        Route::get('/{id}/delete', [\App\Http\Controllers\ServiciosController::class, 'delete'])->name('delete');
        Route::delete('/{id}', [\App\Http\Controllers\ServiciosController::class, 'destroy'])->name('destroy');
    });

    // Rota del post
    Route::prefix('post')->name('post.')->group(function () {
        Route::get('/', [\App\Http\Controllers\PostController::class, 'posts'])->name('index');
        Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])->name('create');
        Route::post('/', [\App\Http\Controllers\PostController::class, 'store'])->name('store');
        Route::get('/{id}', [\App\Http\Controllers\PostController::class, 'details'])->name('details');
        Route::put('/{id}', [\App\Http\Controllers\PostController::class, 'update'])->name('update');
        Route::get('/{id}/delete', [\App\Http\Controllers\PostController::class, 'delete'])->name('delete');
        Route::delete('/{id}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('destroy');
    });

        // Rota de los modelos
    Route::prefix('modelos')->name('modelos.')->group(function () {
        Route::get('/', [\App\Http\Controllers\ModelosController::class, 'modelos'])->name('index');
        Route::get('/create', [\App\Http\Controllers\ModelosController::class, 'create'])->name('create');
        Route::post('/', [\App\Http\Controllers\ModelosController::class, 'store'])->name('store');
        Route::get('/{id}', [\App\Http\Controllers\ModelosController::class, 'edit'])->name('edit');
        Route::put('/{id}', [\App\Http\Controllers\ModelosController::class, 'update'])->name('update');
        Route::get('/{id}/delete', [\App\Http\Controllers\ModelosController::class, 'delete'])->name('delete');
        Route::delete('/{id}', [\App\Http\Controllers\ModelosController::class, 'destroy'])->name('destroy');
    });
});


// ****************************************************
// ****************** Para Client *********************
// ****************************************************

Route::prefix('client')->name('client.')->middleware(['auth', 'role:client'])->group(function () {
    Route::get('/', [\App\Http\Controllers\ClientController::class, 'profile'])
        ->name('profile');

});