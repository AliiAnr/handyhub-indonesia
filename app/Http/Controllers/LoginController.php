<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function auth(Request $request): RedirectResponse
    {
        $credentials  = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($credentials )){

            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('nay_login','Ndak Bisa Login Lo  Bambang');
    }
    public function logout(Request $request): RedirectResponse
    {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
    }
}
