<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{

    // Listado de publicacion

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

    // Formulario de crear

    public function create(Post $post)
    {
        return view('posts.create', ['post' => $post]);
    }

    //Funcion guardar

    public function store(Request $request)
    {
        // Funcion de validacion
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug',
            'body' => 'required'
        ]);

        $post = $request->user()->posts()->create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
        ]);

        return redirect()->route('posts.edit', $post);
    }

    // Formulario de editar

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    // Funcion de editar
    public function update( Request $request ,Post $post)
    {

        // Funcion de validacion
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug' . $post,
            'body' => 'required',
        ]);

        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
        ]);

        return view('posts.edit', ['post' => $post]);
    }


    // Funcion eliminar

    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }
}
