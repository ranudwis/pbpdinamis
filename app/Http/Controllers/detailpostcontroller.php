<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class detailpostcontroller extends Controller
{
    public function lihatdetailpost()
    {
        // SELECT * FROM post
        $post = Post::all();

        return view('detailpost', compact('post'));
    }
}
