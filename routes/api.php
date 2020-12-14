<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\home;
use App\Http\Controllers\Api\detailpostcontroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//homepage
Route::get('/', [home::class, 'lihat']);
Route::get('/kategori/{idkategori}', [home::class, 'sortKategori']);

//Pencarian
Route::get('/cari', [home::class, 'searching']);

Route::get('/detailpost/{idpost}', [detailpostcontroller::class, 'detail']);
