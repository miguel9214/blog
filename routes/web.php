<?php

use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Creacion de grupo de rutas para controlar las rutas

Route::controller(PageController::class)->group(function () {

    // En estas lineas podemos encontras las rutas y los metodos

    Route::get('/', 'home')->name('home');

    Route::get('blog', 'blog')->name('blog');

    Route::get('blog/{post:slug}', 'post')->name('post');
});
