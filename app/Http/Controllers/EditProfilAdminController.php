<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;

class EditProfilAdminController extends Controller
{
    public function tampilFormEdit() {
    	$user = auth()->user();
    	$admin = $user->admin;
    	
    	return view('admin.edit_profil', compact('user', 'admin'));
    }
    public function simpan(Request $request) {
	$request->validate([
		'nama' => ['required', 'max:30'],
		'email' => ['required','email'],
		'password'=> ['nullable'],
	]);

	$user = auth()->user();
	$admin = $user->admin;
	$user->nama = $request->nama;
	$user->email = $request->email;
	if ($request->password) {
		$user->password = Hash::make($request->password);
	}

	$admin->save();
	$user->save();
	return back();
	}
}
