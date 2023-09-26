<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home(){

        return view('home');

    }


    public function blog(){

        // Eloquent nos ayuda a trabajar con los datos como su fueran objetos de php

        // $posts = Post::get();

        $posts = Post::latest()->paginate();

        return view('blog', ['posts' => $posts]);
        
    }

    public function post( Post $post){
    

        return view('post', ['post' => $post]);
    }
    
}
