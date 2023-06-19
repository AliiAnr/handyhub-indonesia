<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\pengguna;
use App\Models\tukang;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function auth(Request $request): RedirectResponse
    {
        $credentials  = $request->validate([
            'email' => 'email',
            'password' => 'required'
        ]);

        $isadmin = admin::where('email', $credentials['email'])->exists();
        $isPengguna = pengguna::where('email', $credentials['email'])->exists();
        $isTukang = tukang::where('email', $credentials['email'])->exists();
    
        if ($isPengguna && Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }elseif ($isTukang && Auth::guard('tukang')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/tukang');
        } elseif ($isadmin && Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }  
        $errorMessage = 'Error Login Something Wrong';
        return back()->with('nay_login', $errorMessage);
    }
    
    public function logout(Request $request): RedirectResponse
    {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
    }
}
