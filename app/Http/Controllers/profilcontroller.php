<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\pengguna;
use App\Models\tukang;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class profilcontroller extends Controller
{
    //
    public function upfoto(Request $request)
    {   
        
        $validate = $request->validate([
            'image' => 'image'
        ]);
        if($request->file('image')){
            $validate['image'] = $request->file('image')->store('fotoprofil');

        }
        if (Auth::guard('tukang')->check()){
            $ison = tukang::find(auth()->user()->id);
        }else{
            $ison = pengguna::find(auth()->user()->id);
        }
        
        $ison->ProfilPic = $validate['image'];
        $ison->save();
        return redirect('profil');
    }
    public function newpassword(Request $request)
    {   
        
        $validate = $request->validate([
            'password' => 'required|min:6'
        ]);
    
        if (Auth::guard('tukang')->check()){
            $ison = tukang::find(auth()->user()->id);
        }else{
            $ison = pengguna::find(auth()->user()->id);
        }
        $ison->password = bcrypt($validate['password']);
        $ison->save();
    
        return redirect('profil');
    }
    public function newnama(Request $request)
    {   
        $validate = $request->validate([
            'nama' => 'required|min:3'
        ]);
    
        if (Auth::guard('tukang')->check()){
            $ison = tukang::find(auth()->user()->id);
        }else{
            $ison = pengguna::find(auth()->user()->id);
        }
        $ison->name = $validate['nama'];
        $ison->save();
    
        return redirect('profil');
    }
    public function newalamat(Request $request)
    {   
        
        $validate = $request->validate([
            'alamat' => 'required|min:2'
        ]);
    
        if (Auth::guard('tukang')->check()){
            $ison = tukang::find(auth()->user()->id);
        }else{
            $ison = pengguna::find(auth()->user()->id);
        }
        $ison->Alamat = $validate['alamat'];
        $ison->save();
    
        return redirect('profil');
    }
}
