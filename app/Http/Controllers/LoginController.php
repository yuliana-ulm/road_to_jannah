<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
<<<<<<< HEAD
            if(Auth::user()->is_admin==0){
                return redirect()->intended('dashboard');
            }
    else{
        return redirect()->intended('beranda');
    }
=======
            return redirect()->intended('dashboard');
>>>>>>> 432168b (first commit)
        }

        return back()->withErrors([
            'email' => 'Tidak ada akun yang cocok dengan input anda'
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}
