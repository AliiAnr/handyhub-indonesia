<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Models\Pengguna;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\profilcontroller;
use App\Http\Controllers\RegisterControler;

Route::get('/', function () {
    return view('layout');
})->name('/');

Route::get('/userlayout',[penggunaController::class,'onlyView']);

Route::get('/user', function () {
    return view('usernew');
  });
Route::get('/home-maintance', function () {
    return view('home_maintance');
  });
Route::get('/layanan', function () {
    return view('layanan');
  });
Route::get('/pesanan', function () {
    return view('pesanan');
  });
Route::get('/bantuan', function () {
    return view('bantuan');
  });
Route::get('/riwayat', function () {
    return view('riwayat');
  });
Route::get('/tukang', function () {
    return view('tukang');
  });
Route::get('/tukangriwayat', function () {
    return view('tukangriwayat');
  });
// Route::get('/user', function () {
//     return view('usernew');
//   })->middleware('auth');
Route::post('/registerUser',[RegisterControler::class,'newUserReg']);
Route::post('/loginAuth',[LoginController::class,'auth']);
Route::post('/logout',[LoginController::class,'logout']);
// Route::get('/profil',[penggunaController::class,'profil'])->middleware('auth');
// Route::post('/profil/upfoto',[profilcontroller::class,'upfoto'])->middleware('auth');
// Route::post('/profil/newprof/password',[profilcontroller::class,'newpassword'])->middleware('auth');
// Route::post('/profil/newprof/nama',[profilcontroller::class,'newnama'])->middleware('auth');
// Route::post('/profil/newprof/alamat',[profilcontroller::class,'newalamat'])->middleware('auth');
Route::get('/profil',[penggunaController::class,'profil']);
Route::post('/profil/upfoto',[profilcontroller::class,'upfoto']);
Route::post('/profil/newprof/password',[profilcontroller::class,'newpassword']);
Route::post('/profil/newprof/nama',[profilcontroller::class,'newnama']);
Route::post('/profil/newprof/alamat',[profilcontroller::class,'newalamat']);