<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;

class TambahPostinganPenulisController extends Controller
{
    public function formTambah() {
    	$kategori = Kategori::all();

    	return view('penulis.tambah_postingan', compact('kategori'));
    }

    public function tambahPost(Request $request) {

    	$request->validate([
    		'judul' => ['required'],
    		'kategori' => ['required'],
    		'isi' => ['required'],
    		'gambar' => ['required','image'],
    	]);

        
    	$penulis = auth()->user()->penulis;
    	 
    	$post = new Post();
    	$post->judul = $request->judul;
    	$post->idkategori = $request->kategori;
    	$post->isipost = $request->isi;
    	$post->file_gambar = $request->gambar->store('public/post');
        $post->tgl_insert = new \DateTime();
        $post->tgl_update = new \DateTime();
        
        $post->idpenulis = auth()->user()->penulis->idpenulis;
    	$post->save();

    	return redirect('penulis/post');
    }
  
}






