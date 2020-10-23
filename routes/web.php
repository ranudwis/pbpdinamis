<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\EditProfilePenulisController;
use App\Http\Controllers\DaftarPostinganPenulisController;
use App\Http\Controllers\TambahPostinganPenulisController;
use App\Http\Controllers\DashboardPenulisController;
use App\Http\Controllers\SimpanEditPostinganController;
use App\Http\Controllers\EditProfilAdminController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\EditPasswordController;
use App\Http\Controllers\EditPenulis;

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\home;
use App\Http\Controllers\detailpostcontroller;

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
Route::get('/penulis/dashboard', [DashboardPenulisController::class, 'index']);
Route::get('/penulis/hapus/{idpost}', [DaftarPostinganPenulisController::class, 'hapus']);
Route::get('/penulis/edit/{idpost}', [DaftarPostinganPenulisController::class, 'edit']);
Route::post('/penulis/edit/{idpost}', [SimpanEditPostinganController::class, 'simpanEdit']);
Route::get('/logout', function () {
  auth()->logout();
  return redirect('/');
});
Route::get('/penulis/post', [DaftarPostinganPenulisController::class, 'daftarPostingan']);
// Route::method

// Rute (url), View
Route::view('login', 'login');
// Rute (url), [ClassController::class, method]
Route::post('login', [AuthenticationController::class, 'login']);

Route::view('daftar', 'daftar');
Route::post('daftar', [RegistrationController::class, 'register']);

//admin
Route::get('/admin/editprofil', [EditProfilAdminController::class, 'tampilFormEdit']);
Route::post('/admin/editprofil', [EditProfilAdminController::class, 'simpan']);
Route::view('/admin/data_kategori','admin.data_kategori');
Route::get('/admin/data_penulis', [adminController::class, 'dataPenulis']);
Route::get('/admin/dashboard', [DashboardAdminController::class, 'tampilDashboardAdmin']);
Route::post('/admin/edit_penulis/{idpenulis}', [EditPasswordController::class, 'editPassword']);
Route::get('/admin/edit_penulis/{idpenulis}', [EditPenulis::class, 'tampilEditPassword']);


//homepage
Route::get('/', [home::class, 'lihat']);

//detailpost
// Route::get('/detailpost', [detailpostcontroller::class, 'lihatdetailpost']);
Route::get('/detailpost/{idpost}', [detailpostcontroller::class, 'detail']);
