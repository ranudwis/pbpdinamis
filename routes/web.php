<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\EditProfilePenulisController;
use App\Http\Controllers\DaftarPostinganPenulisController;
use App\Http\Controllers\TambahPostinganPenulisController;
use App\Http\Controllers\DashboardPenulisController;
use App\Http\Controllers\SimpanEditPostinganController;

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\home;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//penulis
Route::get('/penulis/editprofile', [EditProfilePenulisController::class, 'tampilFormEdit']);
Route::post('/penulis/editprofile', [EditProfilePenulisController::class, 'simpan']);
Route::get('/penulis/post', [DaftarPostinganPenulisController::class, 'daftarPostingan']);
Route::get('/penulis/tambahpost', [TambahPostinganPenulisController::class, 'formTambah']);
Route::post('/penulis/tambahpost', [TambahPostinganPenulisController::class, 'tambahPost']);
Route::view('/penulis/dashboard', 'penulis.dashboard_penulis');
Route::get('/penulis/hapus/{idpost}', [DaftarPostinganPenulisController::class, 'hapus']);
Route::get('/penulis/edit/{idpost}', [DaftarPostinganPenulisController::class, 'edit']);
Route::post('/penulis/edit/{idpost}', [SimpanEditPostinganController::class, 'simpanEdit']);
Route::get('logout', function () {
  auth()->logout();
});
// Route::method

// Rute (url), View
Route::view('login', 'login');
// Rute (url), [ClassController::class, method]
Route::post('login', [AuthenticationController::class, 'login']);

Route::view('daftar', 'daftar');
Route::post('daftar', [RegistrationController::class, 'register']);

//admin
Route::view('admin/data_kategori','admin.data_kategori');
Route::view('admin/data_penulis','admin.data_penulis');
Route::view('admin/edit_profil','admin.edit_profil');
Route::view('admin/dashboard_admin','admin.dashboard_admin');

//homepage
Route::get('/', [home::class, 'lihat']);
