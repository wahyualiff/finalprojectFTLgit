<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/beranda', [HomeController::class, 'home'])->name('beranda');
Route::get('/info-kegiatan', [HomeController::class, 'galeri'])->name('info-kegiatan');

// Route CRUD
Route::resource('pendaftar', PendaftarController::class)->middleware("role:admin|petugas");
Route::resource('layanan', LayananController::class)->middleware("role:admin|petugas");
Route::resource('galeri', GaleriController::class)->middleware("role:admin|petugas");
Route::resource('konfigurasi', KonfigurasiController::class)->middleware('role:admin');
Route::resource('lihat', LihatController::class);
