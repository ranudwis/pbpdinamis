<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required',
        ]);

        $user = User::create($request->only('nama', 'email', 'password'));
        $user->penulis()->create($request->only('alamat', 'kota', 'no_telp'));

        auth()->login($user);

        return redirect('penulis/dashboard');
    }
}
