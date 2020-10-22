<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Penulis;


class EditPasswordController extends Controller
{
	public function editPassword ()
	{
		$penulis = Penulis::find($idpenulis);
	    $penulis->user->password = Hash::make($request->password);

		$penulis->save();
	}
}
