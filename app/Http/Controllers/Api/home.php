<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;

class home extends Controller
{
    public function lihat()
    {
        $post = Post::with('kategori')->get();

        return $post;
    }

    public function sortKategori($idkategori)
    {
        $kategoriDipilih = Kategori::find($idkategori);
        $post = $kategoriDipilih->post;

        return $post;
    }

    public function kategori()
    {
        $kategori = Kategori::all();

        return $kategori;
    }

    public function searching(Request $request)
    {
        $post = Post::where('judul', 'like', '%' . $request->pencarian . '%')->get();

        return $post;
    }
}
