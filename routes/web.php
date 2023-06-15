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
  Route::get('/admin', function () {
    return view('admin');
});
  Route::get('/admin-customer', function () {
    return view('admin-customer');
});
  Route::get('/admin-riwayat', function () {
    return view('admin-riwayat');
});
  Route::get('/pelayanan', function () {
    return view('pelayanan');
});
  Route::get('/tambah-customer', function () {
    return view('tambah_customer');
});
  Route::get('/tambah-pelayanan', function () {
    return view('tambah_pelayanan');
});
  Route::get('/tambah-tukang', function () {
    return view('tambah_tukang');
});
  Route::get('/testimoni', function () {
    return view('testimoni');
});
  Route::get('/admin-tukang', function () {
    return view('admin-tukang');
});
  Route::get('/ubah-customer', function () {
    return view('ubah_customer');
});
  Route::get('/ubah-pelayanan', function () {
    return view('ubah_pelayanan');
});
  Route::get('/ubah-testimoni', function () {
    return view('ubah_testimoni');
});
  Route::get('/ubah-tukang', function () {
    return view('ubah_tukang');
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