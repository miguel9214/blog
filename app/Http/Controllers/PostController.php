<?php

namespace App\Http\Controllers;


use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        // La primera parte de la funcion es la ruta con el metodo que me permite listar,
        // Luego habiendo traido el modelo en el controlador en la parte de arriba.
        // realizo la consulta, de la siguinte forma.

        // La ruta y el metodo
        return view(
            'posts.index',
            ['posts' => Post::latest()->paginate()]
        );
    }

    //  Destroy es la ruta y delete es el metodo

    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }
}
