<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->get();
        return view('posts', compact('posts'));
    }
}

// https://santrikoding.com/tutorial-laravel-eloquent-relationships-4-one-to-many