<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\kategori;
use App\Models\pengguna;
use App\Models\pesanan;
use App\Models\tukang;
use Illuminate\Http\Request;

class penggunaController extends Controller
{

    public function mainhome(){
        $id = auth()->user()->id;
        if(Auth::guard('tukang')->check()){
            return redirect('/tukang')  ;
        }
        return view('usernew',[
            "userid" => pengguna::find($id)
        ]);
    }
    
    public function homemain(){
        return view('home_maintance',[
            'kategori' => kategori::all()
        ]);
    }
    public function listPesanan(){
        $id_customer = Auth::id();
        return view('ListPesanan', [    
            'pesanan' => pesanan::where('id_customer', $id_customer)
                        ->where('status', 'blum di terima')
                        ->get()
        ]);
    }
    public function listriwayat(){
        $id_customer = Auth::id();
        return view('Listriwayat', [    
            'pesanan' => pesanan::where('id_customer', $id_customer)
            ->where(function ($query) {
                $query->where('status', 'Konfirmasi Diterima')
                    ->orWhere('status', 'Sudah Selesai');
            })
            ->get()
        ]);
    }
    public function bantuan(){
        return view('bantuan');
    }
    public function layanan($id_kategori){
        $kategori = kategori::find($id_kategori);
        
        if ($kategori) {
            
        return view('layanan',[
            'kategori' => $kategori->id,
            'foto' => $kategori->Foto,
            'namalayanan' => $kategori->JenisPelayanan,
        ]);
        }
        return view('/');
    }
    public function profil(){
        return view('profil');
    }

}
