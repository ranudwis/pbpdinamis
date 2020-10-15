<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditProfilePenulisController;
use App\Http\Controllers\DaftarPostinganPenulisController;

use App\Http\Controllers\AuthenticationController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/penulis/editprofile', [EditProfilePenulisController::class, 'tampilFormEdit']);

Route::get('/penulis/post', [DaftarPostinganPenulisController::class, 'daftarPostingan']);


// Route::method

// Rute (url), View
Route::view('login', 'login');
// Rute (url), [ClassController::class, method]
Route::post('login', [AuthenticationController::class, 'login']);

Route::view('daftar', 'daftar');

