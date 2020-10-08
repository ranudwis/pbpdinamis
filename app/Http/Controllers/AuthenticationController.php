<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $nama = $request->nama;

        // where('nama kolom', 'nilai kolom yang dicari')
        // SELECT * from admin where nama = $nama
        $admin = Admin::where('nama', $nama)->get();


        return redirect('homepage');
    }
}
