<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
get:consultar
post:salvar
delete:elminar
put:actualizar
|
*/

// Creacion de grupo de rutas para controlar las vistas
Route::controller(PageController::class)->group(function () {
    // En estas lineas podemos encontras las rutas y los metodos
    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post');
});

// Rutas creadas por breeze para la gestion de perfiles
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// De esta forma puedo trabajar con todas las rutas disponibles proporcionadas por laravel. 

Route::resource('posts', PostController::class)->except('show');

require __DIR__ . '/auth.php';
