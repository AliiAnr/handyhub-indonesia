<?php

use App\Http\Controllers\AdminController;
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

// Route::get('/userlayout',[penggunaController::class,'onlyView']);

// Route::get('/user', function () {
//     return view('usernew');
//   });
// Route::get('/home-maintance', function () {
//     return view('home_maintance');
//   });
// Route::get('/layanan', function () {
//     return view('layanan');
//   });
// Route::get('/pesanan', function () {
//     return view('pesanan');
//   });
// Route::get('/bantuan', function () {
//     return view('bantuan');
//   });
// Route::get('/riwayat', function () {
//     return view('riwayat');
//   });
// Route::get('/tukang', function () {
//     return view('tukang');
//   });
// Route::get('/tukangriwayat', function () {
//     return view('tukangriwayat');
//   });
  Route::get('/admin', function () {
    return view('admin');
})->middleware('auth:admin');
// //   Route::get('/admin-customer', function () {
// //     return view('admin-customer');
// // });
// Route::get('/profilcustomer', function () {
//   return view('profilcustomer');
// });
//   Route::get('/admin-riwayat', function () {
//     return view('admin-riwayat');
// });
//   Route::get('/pelayanan', function () {
//     return view('pelayanan');
// });
//   Route::get('/tambah-customer', function () {
//     return view('tambah_customer');
// });
  Route::get('/tambah-pelayanan', function () {
    return view('tambah_pelayanan');
})->middleware('auth:admin');
//   Route::get('/tambah-tukang', function () {
//     return view('tambah_tukang');
// });
//   Route::get('/testimoni', function () {
//     return view('testimoni');
// });
//   Route::get('/admin-tukang', function () {
//     return view('admin-tukang');
// });
//   Route::get('/ubah-customer', function () {
//     return view('ubah_customer');
// });
//   Route::get('/ubah-pelayanan', function () {
//     return view('ubah_pelayanan');
// });
//   Route::get('/ubah-testimoni', function () {
//     return view('ubah_testimoni');
// });
//   Route::get('/ubah-tukang', function () {
//     return view('ubah_tukang');
// });

// Route::get('/user', function () {
//     return view('usernew');
//   })->middleware('auth');

Route::post('/registerUser',[RegisterControler::class,'newUserReg']);
Route::post('/loginAuth',[LoginController::class,'auth']);
Route::post('/logout',[LoginController::class,'logout'])->middleware('auth:tukang,web,admin');
Route::get('/userMainMenu',[penggunaController::class,'mainhome'])->middleware('auth:tukang,web');

Route::get('/profilcustomer',[penggunaController::class,'profilcustomer'])->middleware('auth:web');

Route::get('/profil',[penggunaController::class,'profil'])->middleware('auth:tukang,web');
Route::post('/profil/upfoto',[profilcontroller::class,'upfoto'])->middleware('auth:tukang,web');
Route::post('/profil/update',[profilcontroller::class,'changed'])->middleware('auth:tukang,web');

Route::get('/pesanlist/{jenis}',[penggunaController::class,'homemain'])->middleware('auth');
Route::get('/layanan/{id_kategori}',[penggunaController::class,'layanan'])->middleware('auth');
Route::post('/pesananbaru/{id_kategori}',[PesananController::class,'reqpesananbaru'])->middleware('auth');
Route::get('/listpesanan',[penggunaController::class,'listPesanan'])->middleware('auth');
Route::get('/Listriwayat',[penggunaController::class,'listriwayat'])->middleware('auth');
Route::get('/pesanan/{id_pesanan}',[PesananController::class,'lihatpesanan'])->middleware('auth:tukang,web');
Route::get('/bantuan',[penggunaController::class,'bantuan'])->middleware('auth');

Route::get('/tukang',[TukangController::class,'onsignin'])->middleware('auth:tukang');
Route::post('/accpesanan/{id_pesanan}',[PesananController::class,'accpesanan'])->middleware('auth:tukang');
Route::get('/riwayatukang',[TukangController::class,'riwayat'])->middleware('auth:tukang');

Route::post('/pesananselese/{id_pesanan}',[PesananController::class,'selese'])->middleware('auth:tukang,web');

Route::get('/admin-customer',[AdminController::class,'cslist'])->middleware('auth:admin');
Route::get('/tambahcustomer',[AdminController::class,'tambahcs'])->middleware('auth:admin');
Route::post('/customerbaru',[AdminController::class,'customerbaru'])->middleware('auth:admin');
Route::get('/customerdelete/{id_customer}',[AdminController::class,'deletecs'])->middleware('auth:admin');
Route::get('/customerubah/{id_customer}',[AdminController::class,'ubahcs'])->middleware('auth:admin');
Route::post('/customerchanged/{id_customer}',[AdminController::class,'changed'])->middleware('auth:admin');

Route::get('/admin-tukang',[AdminController::class,'tklist'])->middleware('auth:admin');
Route::get('/tambah-tukang',[AdminController::class,'tambahtk'])->middleware('auth:admin');
Route::post('/tukangbaru',[AdminController::class,'tukangbaru'])->middleware('auth:admin');
Route::get('/tukangdelete/{id_tukang}',[AdminController::class,'deletetk'])->middleware('auth:admin');
Route::get('/tukangubah/{id_tukang}',[AdminController::class,'ubahtk'])->middleware('auth:admin');
Route::post('/tukangchanged/{id_tukang}',[AdminController::class,'changedtk'])->middleware('auth:admin');

Route::get('/pelayanan',[AdminController::class,'plist'])->middleware('auth:admin');
Route::get('/pelayanandelete/{id_pelayanan}',[AdminController::class,'deletep'])->middleware('auth:admin');
Route::get('/pelayananubah/{id_pelayanan}',[AdminController::class,'ubahp'])->middleware('auth:admin');
Route::post('/pelayananbaru',[AdminController::class,'pelayananbaru'])->middleware('auth:admin');
Route::post('/pelayananchanged/{id_pelayanan}',[AdminController::class,'changedp'])->middleware('auth:admin');

Route::get('/admin-riwayat',[AdminController::class,'rlist'])->middleware('auth:admin');
Route::get('/riwayatdelete/{id_riwayat}',[AdminController::class,'deleter'])->middleware('auth:admin');