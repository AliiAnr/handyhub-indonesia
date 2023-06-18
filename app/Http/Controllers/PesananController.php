<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\pesanan;
use App\Models\pengguna;
use Illuminate\Http\Request;
use App\Http\Requests\StorepesananRequest;
use App\Http\Requests\UpdatepesananRequest;
use App\Models\kategori;
use App\Models\tukang;

class PesananController extends Controller
{
    public function reqpesananbaru(Request $request, $id_kategori){
        $notes = $request->input('notes');
        $photo = $request->file('photo');
        $date = $request->input('visit-date');
        $id_customer = Auth::id();

        Pesanan::create([
            'pesan' => $notes,
            'Foto' => $photo->store('PhotoPesanan'),
            'waktu' => $date,
            'id_kategori'=> $id_kategori,
            'id_tukang'=> null,
            'id_customer' =>$id_customer
        ]);

        return redirect('/listpesanan')->with('yay', 'Register successful!');
    }
    public function lihatpesanan($id){
        $id_pesanan = pesanan::find($id);
        $pengguna = Pengguna::find($id_pesanan->id_customer);
        $isend = 'Sudah Selesai';
        $alamat = $pengguna->jalan .', ' .$pengguna->kodepos  .', ' . $pengguna->kecamatan .', ' . $pengguna->Alamat .', ' . $pengguna->provinsi;
        $tukang = tukang::find($id_pesanan->id_tukang);
        $kategori = kategori::find($id_pesanan->id_kategori);
        $pemesan = pengguna::find($id_pesanan->id_customer);
        return view('pesanan', [    
            'is'=> $isend,
            'pesanan' => $id_pesanan,
            'alamat'=>$alamat,
            'kategori'=>$kategori,
            'pemesan'=>$pemesan,
            'tukang'=>$tukang
        ]);
    }
    
    public function accpesanan($id_pesan){
        $tukang = tukang::find(auth()->user()->id);
        pesanan::where('id', $id_pesan)->update([
            'status' =>'Konfirmasi Diterima',
            'id_tukang' => $tukang->id,
        ]);
        return redirect('/riwayatukang');
    }

    public function selese($id_pesan){
        pesanan::where('id', $id_pesan)->update([
            'status' =>'Sudah Selesai',
        ]);
        $pesanan = pesanan::find($id_pesan);
        $end = $pesanan->updated_at;
        pesanan::where('id', $id_pesan)->update([
            'waktu_end' => $end,
        ]);
        if(Auth::guard('tukang')->check()){
            return redirect('/riwayatukang');
        }else{
            return redirect('/Listriwayat');    
        }
    }
}
