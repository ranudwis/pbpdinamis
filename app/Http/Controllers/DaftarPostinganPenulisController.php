<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;

class DaftarPostinganPenulisController extends Controller
{
    public function daftarPostingan() {
    	$post = auth()->user()->penulis->post;

    	return view('penulis.daftar_postingan', compact('post'));
    }

    public function tambahPostingan() {
    	
    }

    public function hapus($idpost) {
    	$post = Post::find($idpost);
    	if ($post) {
    		$post->delete();
    	}

    	return redirect('/penulis/post');
    }

    public function edit($idpost) {
    	$post = Post::find($idpost);
        $kategori = Kategori::all();

    	return view('penulis.edit_postingan', compact('post','kategori'));
    }

}
