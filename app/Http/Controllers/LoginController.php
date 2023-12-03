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
        return view('login.login', [
            'title' => 'Login',
        ]);
    }

    public function lupaPw()
    {
        return view('login.lupa', [
            'title' => 'Lupa Password',
        ]);
    }

    public function resetPw()
    {
        return view('login.reset', [
            'title' => 'Reset Password',
        ]);
    }


    public function reset(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'password' => 'required',
            'otp' => 'required',
        ]);
        $user = User::where('nik', $request->nik)->first();
        if ($user && $user->otp == $request->input('otp') && now() <= $user->otp_expires_at) {
            $user->resetPassword($request->input('password'));
            return redirect('/login')->with('success', 'Password telah diubah!');
        }

        return back()->with('loginError', 'OTP salah atau sudah kadaluarsa!')->with('nik', $user->nik);
    }



    public function send(Request $request)
    {
        $user = User::where('nik', $request->nik)->first();
        if ($user) {
            $otp = $user->generateOtp();
            $phone_number = $user->no_hp;

            $phone_number = preg_replace('/^62/', '0', $phone_number);

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.fonnte.com/send',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'target' => $phone_number,
                    'message' => "OTP mu adalah : $otp",
                    'countryCode' => '62', //optional
                ),
                CURLOPT_HTTPHEADER => array(
                    'Authorization: xNs9nSws9bqjaBxD04WQ' //change TOKEN to your actual token
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            return redirect()->route('password.reset.form')->with('success', 'OTP dikirim!')->with('nik', $user->nik);
        } else {
            return back()->with('loginError', 'NIK tidak ditemukan!');
        }
    }



    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nik' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('nik', $request->nik)->first();
        if ($user) {
            if ($user->status == 'Disetujui') {
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    if (auth()->user()->role == 'Ketua') {
                        return redirect('/dashboardRt')->with('loginSuccess', 'Selamat Datang ' . auth()->user()->nama . '!');
                    } elseif (auth()->user()->role == 'Warga') {
                        return redirect('/dashboard')->with('loginSuccess', 'Selamat Datang ' . auth()->user()->nama . '!');
                    } else {
                        return redirect('/dashboardAdmin')->with('loginSuccess', 'Selamat Datang ' . auth()->user()->nama . '!');
                    }
                }
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
