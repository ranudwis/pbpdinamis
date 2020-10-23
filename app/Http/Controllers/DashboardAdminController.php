<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class DashboardAdminController extends Controller
{
    public function tampilDashboardAdmin() {
    	$user = auth()->user();
    	$admin = $user->admin;
        $kategori = Kategori::withCount('post')->get();

    	return view('admin.dashboard_admin', compact('user', 'admin', 'kategori'));
    }
}
