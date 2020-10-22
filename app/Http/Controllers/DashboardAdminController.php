<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function tampilDashboardAdmin() {
    	$user = auth()->user();
    	$admin = $user->admin;
    	
    	return view('admin.dashboard_admin', compact('user', 'admin'));
    }
}
