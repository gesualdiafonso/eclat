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

// Para Admin

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');

// Admin - Servicios
Route::get('/admin/servicios', [App\Http\Controllers\AdminController::class, 'servicios'])->name('admin.servicios.index');

// Crear nuevo servicio -> ruta para mostrar el formulario
Route::get('/admin/servicios/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.servicios.create');

// Ruta para procesar el formulario de creación y almacenar el nuevo servicio
Route::post('/admin/servicios', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.servicios.store');

// Detalles de un servicio específico
Route::get('/admin/servicios/{id}', [App\Http\Controllers\AdminController::class, 'details'])->name('admin.servicios.details');

