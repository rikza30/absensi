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

Route::get('/', function(){
    return view('auth.login');
});

Route::get('/masuk', function () {
    return view('presensi.masuk');
});

Route::get('/keluar', function () {
    return view('presensi.keluar');
});

Route::get('/rekap', function () {
    return view('presensi.rekap');
});


Route::post('/simpanmasuk', [PresensiController::class, 'store'])->name('simpanmasuk');
Route::post('/ubahpresensi',[PresensiController::class,'presensipulang'])->name('ubahpresensi');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::resource('presensi', PresensiController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => ['auth', 'ceklevel:admin']], function (){
    Route::get('lihat-data',[PresensiController::class,'halamanrekap'])->name('lihat-data'); 
    Route::get('lihat-data/{tglawal}', [PresensiController::class,'show'])->name('show');
});

Route::group(['middleware' => ['auth', 'ceklevel:user']], function (){
    Route::get('/presensi.masuk', [PresensiController::class, 'masuk'])->name('masuk');
    Route::get('/presensi.keluar', [PresensiController::class, 'keluar'])->name('keluar');
});
