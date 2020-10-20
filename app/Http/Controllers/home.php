<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class home extends Controller
{
    public function lihat()
    {
        // SELECT * FROM post
        $post = Post::all();

        return view('home', compact('post'));
    }
}
