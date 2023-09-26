<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login',[
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nik'=>'required',
            'password'=>'required',
        ]);

        if (Auth::attempt($credentials)) {
           $request->session()->regenerate();
           if (auth()->user()->role == 'Ketua') {
            return redirect('/dashboardRt')->with('loginSuccess', 'Selamat Datang ' . auth()->user()->nama . '!');
           }elseif (auth()->user()->role == 'Warga') {
            return redirect('/dashboard')->with('loginSuccess', 'Selamat Datang ' . auth()->user()->nama . '!');
           }else{
            return redirect('/dashboardAdmin')->with('loginSuccess', 'Selamat Datang ' . auth()->user()->nama . '!');
           }
        }

        return back()->with('loginError', 'NIK atau Password Salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
