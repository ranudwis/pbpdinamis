<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarPostinganPenulisController extends Controller
{
    public function daftarPostingan() {
    	$post = auth()->user()->penulis->post;

    	return view('daftar_postingan', compact('post'));
    }
}
