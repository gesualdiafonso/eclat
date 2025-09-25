<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\ViewController::class, 'home'])->name('home');

Route::get('/about', [App\Http\Controllers\ViewController::class, 'about'])->name('about');

Route::get('/servicios', [App\Http\Controllers\ServiciosController::class, 'index'])->name('servicios.index');

Route::get('/servicios/{id}', [App\Http\Controllers\ServiciosController::class, 'show'])->name('servicios.show');

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');

// Rota de Login y Logou
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

// Para Admin

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');

// Admin - Servicios
/**
 * Uso el prefijo /admin/servicios para todas las rutas relacionadas con la gestión de servicios en el panel de administración.
 */
Route::prefix('admin/servicios')->name('admin.servicios.')->group(function (){
    // Listar todos los servicios
    Route::get('/', [App\Http\Controllers\ServiciosController::class, 'servicios'])->name('index');

    // Crear nuevo servicio -> ruta para mostrar el formulario
    Route::get('/create', [App\Http\Controllers\ServiciosController::class, 'create'])->name('create');

    // Ruta para procesar el formulario de creación y almacenar el nuevo servicio
    Route::post('/', [App\Http\Controllers\ServiciosController::class, 'store'])->name('store');

    // Detalles de un servicio específico
    Route::get('/{id}', [App\Http\Controllers\ServiciosController::class, 'details'])->name('details');

    // Ruta para editar un servicio específico
    Route::put('/{id}', [App\Http\Controllers\ServiciosController::class, 'update'])->name('update');

    // Ruta para eliminar un servicio específico

});

// Admin - Post
/**
 * Uso el prefijo /admin/post para todas las rutas relacionadas con la gestión de posts en el panel de administración.
 */
Route::prefix('admin/post')->name('admin.post.')->group(function (){

    // Listar todos los posts
    Route::get('/', [App\Http\Controllers\PostController::class, 'posts'])->name('index');

    // Crear nuevo post -> ruta para mostrar el formulario
    Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('create');

    // Ruta para procesar el formulario de creación y almacenar el nuevo post
    Route::post('/', [App\Http\Controllers\PostController::class, 'store'])->name('store');

    // Detalles de un post específico
    Route::get('/{id}', [App\Http\Controllers\PostController::class, 'details'])->name('details');

    // Ruta para editar un post específico
    Route::put('/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('update');

    // Ruta para eliminar un post específico
    Route::get('/{id}/delete', [App\Http\Controllers\PostController::class, 'delete'])->name('delete');

    Route::delete('/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('destroy'); // deleta
});