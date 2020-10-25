<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;

class home extends Controller
{
    public function lihat()
    {
        // SELECT * FROM post
        $post = Post::all();
        $kategori = Kategori::all();

        return view('home', compact('post','kategori'));
    }

    public function sortKategori($idkategori)
    {
        $kategoriDipilih = Kategori::find($idkategori);
        $post = $kategoriDipilih->post;
        $kategori = Kategori::all();
        
        return view('home', compact('post','kategori','kategoriDipilih'));
    }

    public function searching(Request $request)
    {

        $post = Post::where('judul', 'like', '%' . $request->pencarian . '%')->get();

        return view('pencarian', compact('post'));
    }
}
