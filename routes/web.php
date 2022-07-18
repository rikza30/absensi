<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresensiController;

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
    return view('admin');
});

Route::get('/masuk', function () {
    return view('presensi.masuk');
});

Route::get('/keluar', function () {
    return view('presensi.keluar');
});

Route::get('/lihat-data', function () {
    return view('presensi.rekap');
});

Route::post('/simpanmasuk', [PresensiController::class, 'store'])->name('simpanmasuk');
Route::post('ubahpresensi',[PresensiController::class,'presensipulang'])->name('ubahpresensi');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');


Auth::routes();


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
