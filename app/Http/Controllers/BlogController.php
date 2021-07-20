<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    //
    public  function index()
    {
        
        return view('blog')->with([
            'posts' => Post::all()
        ]);
    }

    public function show($slug) 
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post')->with([
            'post' => $post
        ]);
    }
}
