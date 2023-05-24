<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pengguna;
use App\Http\Controllers\penggunaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "Email" => "sdasdad",
        "Name" => "Ali An Nuur",
        "Nim" => "F1D021001"
    ]);
});

Route::get('/layout', function () {
    return view('layout');
  });
  
Route::get('/abot', function () {
    return view('abouy');
});

Route::get('/userlayout',[penggunaController::class,'onlyView']);