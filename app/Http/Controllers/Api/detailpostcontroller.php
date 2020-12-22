<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class detailpostcontroller extends Controller
{
    public function detail($idpost)
    {
        $post = Post::with('komentar.penulis.user', 'kategori', 'penulis.user')
            ->find($idpost);

        return $post;
    }
}
