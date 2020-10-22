<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Penulis;


class EditPasswordController extends Controller
{
	public function editPassword(Request $request, $idpenulis)
	{
		$penulis = Penulis::find($idpenulis);
		$user = $penulis->user;
	    $user->password = Hash::make($request->password);

		$user->save();
		return redirect('/admin/data_penulis');
	}
}
