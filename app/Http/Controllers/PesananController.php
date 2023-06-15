<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\pesanan;
use App\Models\pengguna;
use Illuminate\Http\Request;
use App\Http\Requests\StorepesananRequest;
use App\Http\Requests\UpdatepesananRequest;
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
        $alamat = $pengguna->Alamat;
        $tukang = tukang::find($id_pesanan->id_tukang);
        return view('pesanan', [    
            'pesanan' => $id_pesanan,
            'alamat'=>$alamat,
            'tukang'=>$tukang
        ]);
    }
    
    public function accpesanan($id_pesan,$id_tukang){
        $id_pesanan = pesanan::find($id_pesan);
        $tukang = tukang::find($id_tukang);
        pesanan::where('id', $id_pesanan)->update([
            'status' =>'Konfirmasi Diterima',
            'id_tukang' => $tukang->id,
        ]);
        return redirect('/tukangriwayat');
    }
}
