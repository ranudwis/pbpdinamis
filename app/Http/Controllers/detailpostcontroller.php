<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class detailpostcontroller extends Controller
{
    public function detail($idpost)
    {
        $post = Post::find($idpost);

        return view('detailpost', compact('post'));
    }
}
