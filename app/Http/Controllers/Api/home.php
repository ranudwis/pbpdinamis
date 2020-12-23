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
        $post = Post::with('kategori', 'penulis.user')->get();

        return $post;
    }

    public function sortKategori($idkategori)
    {
        $kategoriDipilih = Kategori::find($idkategori);
        $post = $kategoriDipilih->post()->with('kategori', 'penulis.user')->get();

        return [
            'kategori' => $kategoriDipilih->nama,
            'post' => $post
        ];
    }

    public function kategori()
    {
        $kategori = Kategori::withCount('post')->get();

        return $kategori;
    }

    public function searching(Request $request)
    {
        $post = Post::where('judul', 'like', '%' . $request->pencarian . '%')
            ->with('kategori', 'penulis.user')
            ->get();

        return $post;
    }
}
