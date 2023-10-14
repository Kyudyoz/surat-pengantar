<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

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
        $user = User::where('nik', $request->nik)->first();
        if ($user->status == 'Disetujui Admin') {
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
        }

        

        return back()->with('loginError', 'Akun Tidak Ada');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
