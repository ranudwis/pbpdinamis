<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SimpanEditPostinganController extends Controller
{
    public function simpanEdit(Request $request, $idpost) {
        //validasi
        $request->validate([
            'judul' => ['required'],
            'kategori' => ['required'],
            'isi' => ['required'],
            'gambar' => ['nullable','image'],
        ]);

        $post = Post::find($idpost);
        $post->judul = $request->judul;
        $post->idkategori = $request->kategori;
        $post->isipost = $request->isi;
        if ($request->gambar) {
            $post->file_gambar = $request->gambar->store('public/post');
        }

        $post->tgl_update = new \DateTime();


        $post->save();

        return redirect('penulis/post');
    }   
}
