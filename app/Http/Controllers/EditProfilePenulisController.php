<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProfilePenulisController extends Controller
{
    public function tampilFormEdit() {
    	$penulis = auth()->user()->penulis;

    	return view('edit_profile_penulis', compact('penulis'));
    }

	public function simpan() {
	$request->validate([
		'nama' => ['required', 'max:30'],
		'body' => ['required'],
		'notelp' => ['required', 'max:12'],
		'email' => 'required|email',
		'password'=> 'required|password',
	]);

	$penulis = auth()->user()->penulis;
	$penulis->nama = $request->nama;
	$penulis->notelp = $request->notelp;
	$penulis->email = $request->email;
	$penulis->password = $request->password;	
	$penulis->alamat = $request->alamat;
	$penulis->kota = $request->kota;

	$penulis->save();
	return back();
	}

}
