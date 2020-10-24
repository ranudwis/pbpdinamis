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
use App\Http\Controllers\DataKategoriController;

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\home;
use App\Http\Controllers\detailpostcontroller;
use App\Http\Controllers\TambahKomentarController;
use App\Http\Controllers\HapusKomentarController;

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
Route::middleware('penulis')->group(function () {
    Route::get('/penulis/editprofile', [EditProfilePenulisController::class, 'tampilFormEdit']);
    Route::post('/penulis/editprofile', [EditProfilePenulisController::class, 'simpan']);
    Route::get('/penulis/post', [DaftarPostinganPenulisController::class, 'daftarPostingan']);
    Route::get('/penulis/tambahpost', [TambahPostinganPenulisController::class, 'formTambah']);
    Route::post('/penulis/tambahpost', [TambahPostinganPenulisController::class, 'tambahPost']);
    Route::get('/penulis/dashboard', [DashboardPenulisController::class, 'index']);
    Route::get('/penulis/hapus/{idpost}', [DaftarPostinganPenulisController::class, 'hapus']);
    Route::get('/penulis/edit/{idpost}', [DaftarPostinganPenulisController::class, 'edit']);
    Route::post('/penulis/edit/{idpost}', [SimpanEditPostinganController::class, 'simpanEdit']);
    Route::get('/penulis/post', [DaftarPostinganPenulisController::class, 'daftarPostingan']);
    Route::get('/detailpost/hapus/{idkomentar}', [HapusKomentarController::class, 'hapusKomentar']);
});
Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});
// Route::method

// Rute (url), View
Route::view('login', 'login');
// Rute (url), [ClassController::class, method]
Route::post('login', [AuthenticationController::class, 'login']);

Route::view('daftar', 'daftar');
Route::post('daftar', [RegistrationController::class, 'register']);

//admin
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', [DashboardAdminController::class, 'tampilDashboardAdmin']);

    Route::get('/admin/editprofil', [EditProfilAdminController::class, 'tampilFormEdit']);
    Route::post('/admin/editprofil', [EditProfilAdminController::class, 'simpan']);

    Route::get('/admin/data_penulis', [adminController::class, 'dataPenulis']);
    Route::post('/admin/edit_penulis/{idpenulis}', [EditPasswordController::class, 'editPassword']);
    Route::get('/admin/edit_penulis/{idpenulis}', [EditPenulis::class, 'tampilEditPassword']);

    Route::get('/admin/data_kategori', [DataKategoriController::class, 'dataKategori']);
    Route::post('/admin/data_kategori', [DataKategoriController::class, 'tambahKategori']);
    Route::get('/admin/edit_kategori/{idkategori}', [DataKategoriController::class, 'tampilEditKategori']);
    Route::post('/admin/edit_kategori/{idkategori}', [DataKategoriController::class, 'editKategori']);
    Route::get('/admin/hapus_kategori/{idkategori}', [DataKategoriController::class, 'hapusKategori']);
});

//homepage
Route::get('/', [home::class, 'lihat']);
Route::get('/kategori/{idkategori}', [home::class, 'sortKategori']);

//Pencarian
Route::get('/cari', [home::class, 'searching']);

//detailpost
// Route::get('/detailpost', [detailpostcontroller::class, 'lihatdetailpost']);
Route::get('/detailpost/{idpost}', [detailpostcontroller::class, 'detail']);
Route::post('/detailpost/{idpost}', [TambahKomentarController::class, 'tambahKomentar']);