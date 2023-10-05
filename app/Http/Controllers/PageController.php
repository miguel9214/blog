<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home( Request $request)
    {

        // Eloquent nos ayuda a trabajar con los datos como si fueran objetos de php

        // $posts = Post::get();

        // Buscador dentro de la pagina home

        $search=$request->search;

        $posts = Post::where('title','LIKE',"%{$search}%")->latest()->paginate();

        return view('home', ['posts' => $posts]);
    }


    // public function blog()
    // {

    //     // Eloquent nos ayuda a trabajar con los datos como si fueran objetos de php

    //     // $posts = Post::get();

    //     $posts = Post::latest()->paginate();

    //     return view('blog', ['posts' => $posts]);
    // }

    public function post(Post $post)
    {

        return view('post', ['post' => $post]);
    }
}
