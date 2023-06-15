<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use App\Models\pengguna;
use App\Models\tukang;
use Illuminate\Http\Request;

class TukangController extends Controller
{
    public function onsignin(){

        $listblumadatukang = pesanan::where('status', '=', 'blum di terima')->get();
        $listnama = pesanan::where('status', '=', 'blum di terima')
                            ->join('penggunas', 'pesanans.id_customer', '=', 'penggunas.id')
                            ->select('pesanans.id', 'penggunas.name')
                            ->get();
        return view('tukang',[
            'list' =>$listblumadatukang,
            'listname'=>$listnama
        ]);
    }
    public function riwayat(){
        $tukang = tukang::find(auth()->user()->id);
        $list = pesanan::where('id_tukang', $tukang->id)
                       ->where('status', '!=', 'blum di terima')
                       ->get();
        return view('/tukangriwayat',[
            'list' =>$list
        ]);
    }
}
