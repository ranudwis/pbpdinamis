<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardPenulisController extends Controller
{
    public function index() {
        $totalTampilan = auth()->user()->penulis->post()->sum('tampilan');
        $totalPost = auth()->user()->penulis->post()->count();
        return view('penulis.dashboard_penulis', compact('totalTampilan','totalPost'));
    }
}

