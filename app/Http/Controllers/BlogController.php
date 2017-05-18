<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Post,
    Carbon\Carbon;

class BlogController extends Controller
{
    public function index()
    {   
        $posts = Post::where('created_at', '<=', Carbon::now())
            ->orderBy('created_at', 'desc')
            ->paginate(config('blog.posts_per_page'));
        return view('blog.index', ['posts'=> $posts]);
    }

    public function show($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('blog.post')->withPost($post);
    }
}
