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

Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');


// ****************************************************
// ******************* Para Admin *********************

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware('auth');

// Admin - Servicios
/**
 * Uso el prefijo /admin/servicios para todas las rutas relacionadas con la gestión de servicios en el panel de administración.
 */
Route::prefix('admin/servicios')->name('admin.servicios.')->group(function (){
    // Listar todos los servicios
    Route::get('/', [\App\Http\Controllers\ServiciosController::class, 'servicios'])->name('index')->middleware('auth');;

    // Crear nuevo servicio -> ruta para mostrar el formulario
    Route::get('/create', [\App\Http\Controllers\ServiciosController::class, 'create'])
            ->name('create')
            ->middleware('auth');

    // Ruta para procesar el formulario de creación y almacenar el nuevo servicio
    Route::post('/', [\App\Http\Controllers\ServiciosController::class, 'store'])
            ->name('store')
            ->middleware('auth');

    // Detalles de un servicio específico
    Route::get('/{id}', [\App\Http\Controllers\ServiciosController::class, 'details'])
            ->name('details')
            ->middleware('auth');

    // Ruta para editar un servicio específico
    Route::put('/{id}', [\App\Http\Controllers\ServiciosController::class, 'update'])
            ->name('update')
            ->middleware('auth');

    // Ruta para eliminar un servicio específico

});

// Admin - Post
/**
 * Uso el prefijo /admin/post para todas las rutas relacionadas con la gestión de posts en el panel de administración.
 */
Route::prefix('admin/post')->name('admin.post.')->group(function (){

    // Listar todos los posts
    Route::get('/', [\App\Http\Controllers\PostController::class, 'posts'])
            ->name('index')
            ->middleware('auth');

    // Crear nuevo post -> ruta para mostrar el formulario
    Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])
            ->name('create')
            ->middleware('auth');

    // Ruta para procesar el formulario de creación y almacenar el nuevo post
    Route::post('/', [\App\Http\Controllers\PostController::class, 'store'])->name('store')->middleware('auth');

    // Detalles de un post específico
    Route::get('/{id}', [\App\Http\Controllers\PostController::class, 'details'])
            ->name('details')
            ->middleware('auth');

    // Ruta para editar un post específico
    Route::put('/{id}', [\App\Http\Controllers\PostController::class, 'update'])
            ->name('update')
            ->middleware('auth');

    // Ruta para eliminar un post específico
    Route::get('/{id}/delete', [\App\Http\Controllers\PostController::class, 'delete'])
            ->name('delete')
            ->middleware('auth');

    Route::delete('/{id}', [\App\Http\Controllers\PostController::class, 'destroy'])
            ->name('destroy')
            ->middleware('auth'); // deleta
});

// Admin - modelos
/**
 * Uso el prefijo /admin/post para todas las rutas relacionadas con la gestión de posts en el panel de administración.
 */
Route::prefix('admin/modelos')->name('admin.modelos.')->group(function (){

    // Listar todos los posts
    Route::get('/', [\App\Http\Controllers\ModelosController::class, 'modelos'])
            ->name('index')
            ->middleware('auth');

    // Crear nuevo post -> ruta para mostrar el formulario
    Route::get('/create', [\App\Http\Controllers\ModelosController::class, 'create'])
            ->name('create')
            ->middleware('auth');

    // Ruta para procesar el formulario de creación y almacenar el nuevo post
    Route::post('/', [\App\Http\Controllers\ModelosController::class, 'store'])
            ->name('store')
            ->middleware('auth');

    // Detalles de un post específico
    Route::get('/{id}', [\App\Http\Controllers\ModelosController::class, 'edit'])
            ->name('edit')
            ->middleware('auth');

    // Ruta para editar un post específico
    Route::put('/{id}', [\App\Http\Controllers\ModelosController::class, 'update'])
            ->name('update')
            ->middleware('auth');

    // Ruta para eliminar un post específico
    Route::get('/{id}/delete', [\App\Http\Controllers\ModelosController::class, 'delete'])
            ->name('delete')
            ->middleware('auth');

    Route::delete('/{id}', [\App\Http\Controllers\ModelosController::class, 'destroy'])
            ->name('destroy') // deleta
            ->middleware('auth');
});