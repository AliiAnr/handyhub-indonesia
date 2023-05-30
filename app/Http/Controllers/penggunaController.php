<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;

class penggunaController extends Controller
{
    public function onsignin($id){
        return view('user',[
            "userid" => pengguna::find($id)
        ]);
    }
    public function onlyView(){
        return view('user');
    }
    public function profil(){
        return view('profil');
    }

}
