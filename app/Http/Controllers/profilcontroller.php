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
        
        if(isset($validate['image'])){
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
        }else{
            if (Auth::guard('tukang')->check()){
                $ison = tukang::find(auth()->user()->id);
            }else{
                $ison = pengguna::find(auth()->user()->id);
            }
            $ison->ProfilPic = NULL;
            $ison->save();
            return redirect('profil');
            
        }

    }
    public function changed(Request $request){
        $validatedData = $request->validate([
            'jalan' => 'nullable',
            'kodepos' => 'nullable',
            'Alamat' => 'nullable',
            'kecamatan' => 'nullable',
            'provinsi' => 'nullable',
            'No_Hp' => 'nullable',
            'name' => 'nullable',
            'password'=> 'nullable'
        ]);
        
        if ($validatedData['password'] !== null) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }
        $pengguna = pengguna::find(auth()->user()->id);
        $pengguna->update(array_filter($validatedData));
        return redirect('/profil');
    }
}
