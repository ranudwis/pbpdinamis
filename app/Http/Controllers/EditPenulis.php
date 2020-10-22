<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class EditPenulis extends Controller
{
    public function tampilEditPassword($idpenulis)
	{
		$penulis = Penulis::find($idpenulis);
		return view('admin.edit_penulis', compact('penulis'));
	}
}
