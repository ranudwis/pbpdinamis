<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EditProfilePenulisController extends Controller
{
    public function tampilFormEdit() {
    	$user = auth()->user();
    	$penulis = $user->penulis;
    	
    	return view('penulis.edit_profil', compact('user', 'penulis'));
    }

	public function simpan(Request $request) {
	$request->validate([
		'nama' => ['required', 'max:30'],
		'no_telp' => ['required', 'max:12'],
		'email' => ['required','email'],
		'password'=> ['nullable'],
	]);

	$user = auth()->user();
	$penulis = $user->penulis;
	$user->nama = $request->nama;
	$penulis->no_telp = $request->no_telp;
	$user->email = $request->email;
	if ($request->password) {
		$user->password = Hash::make($request->password);
	}
	$penulis->alamat = $request->alamat;
	$penulis->kota = $request->kota;

	$penulis->save();
	$user->save();
	return back();
	}

}
