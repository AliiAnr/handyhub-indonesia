<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Models\Pengguna;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\RegisterControler;

Route::get('/', function () {
    return view('layout');
})->name('/');

Route::get('/userlayout',[penggunaController::class,'onlyView']);

Route::get('/user', function () {
    return view('usernew');
  })->middleware('auth');
Route::post('/registerUser',[RegisterControler::class,'newUserReg']);
Route::post('/loginAuth',[LoginController::class,'auth']);
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/profil',[penggunaController::class,'profil'])->middleware('auth');