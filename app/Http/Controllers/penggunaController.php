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
    
    public function homemain($jenis){
        if ($jenis === 'Home') {
            $jenis = 'Home Maintenance';
        } elseif ($jenis === 'build') {
            $jenis = 'Build and Renovate';
        } else {
            $jenis = 'Design Inspiration';
        }
        $rows = kategori::where('Kategori', $jenis)->get();
        return view('home_maintance',[
            'kategori' => $rows,
            'jenis'=>$jenis

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
        if(Auth::guard('tukang')->check()){
            $user = tukang::find(auth()->user()->id);
        }else{
            $user = pengguna::find(auth()->user()->id);
        }
        return view('profil',[
            'user' => $user
        ]);  
    }
    public function profilcustomer(){
        $pengguna = pengguna::find( Auth::id());
        return view('profilcustomer',[
            'pengguna' => $pengguna
        ]);
    }

}
