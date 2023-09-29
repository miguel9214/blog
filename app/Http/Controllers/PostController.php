<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use App\Models\Post;

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


    public function create(Post $post)
    {
        return view('posts.create', ['post' => $post]);
    }

    public function store(Request $request)
    {

        // $request->validate([
        //     'title' => 'required',
        //     'slug' => 'required|unique:posts,slug',
        //     'body' => 'required'
        // ]);

        $post = $request->user()->posts()->create([
            'title' => $title = $request->title,
            'slug' => Str::slug($title),
            'body' => $request->body,
        ]);

        return redirect()->route('posts.edit', $post);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    //  Destroy es la ruta y delete es el metodo

    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }
}
