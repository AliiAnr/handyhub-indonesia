<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterControler extends Controller
{   
    public function newUserReg(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:penggunas',
            'password'=>'required|min:6'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        pengguna::create($validatedData);


        return redirect('/')->with('yay', 'Register successful!');
    }

}
