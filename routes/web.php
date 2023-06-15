<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Models\Pengguna;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\profilcontroller;
use App\Http\Controllers\RegisterControler;
use App\Http\Controllers\TukangController;
use App\Models\pesanan;

Route::get('/', function () {
    return view('layout');
})->name('/');

Route::post('/registerUser',[RegisterControler::class,'newUserReg']);
Route::post('/loginAuth',[LoginController::class,'auth']);
Route::post('/logout',[LoginController::class,'logout'])->middleware('auth:tukang,web');
Route::get('/userMainMenu',[penggunaController::class,'mainhome'])->middleware('auth:tukang,web');
Route::get('/profil',[penggunaController::class,'profil'])->middleware('auth:tukang,web');
Route::post('/profil/upfoto',[profilcontroller::class,'upfoto'])->middleware('auth:tukang,web');
Route::post('/profil/newprof/password',[profilcontroller::class,'newpassword'])->middleware('auth:tukang,web');
Route::post('/profil/newprof/nama',[profilcontroller::class,'newnama'])->middleware('auth:tukang,web');
Route::post('/profil/newprof/alamat',[profilcontroller::class,'newalamat'])->middleware('auth:tukang,web');

Route::get('/homemaintanance',[penggunaController::class,'homemain'])->middleware('auth');
Route::get('/layanan/{id_kategori}',[penggunaController::class,'layanan'])->middleware('auth');
Route::post('/pesananbaru/{id_kategori}',[PesananController::class,'reqpesananbaru'])->middleware('auth');
Route::get('/listpesanan',[penggunaController::class,'listPesanan'])->middleware('auth');
Route::get('/Listriwayat',[penggunaController::class,'listriwayat'])->middleware('auth');
Route::get('/pesanan/{id_pesanan}',[PesananController::class,'lihatpesanan'])->middleware('auth:tukang,web');
Route::get('/bantuan',[penggunaController::class,'bantuan'])->middleware('auth');

Route::get('/tukang',[TukangController::class,'onsignin'])->middleware('auth:tukang');
Route::post('/accpesanan/{id_pesanan}/{id_tukang}',[PesananController::class,'accpesanan'])->middleware('auth:tukang');
Route::get('/tukangriwayat',[TukangController::class,'riwayat'])->middleware('auth:tukang');