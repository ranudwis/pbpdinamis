<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class adminController extends Controller
{
     public function dataPenulis()
    {
        // SELECT * FROM Penulis
        $penulis = Penulis::all();
        
        return view('admin.data_penulis', compact('penulis'));
    }
}
