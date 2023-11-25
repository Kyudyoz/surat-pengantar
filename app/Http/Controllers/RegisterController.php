<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Registrasi Akun',
            'rts' => Rt::orderBy('nama_rt')->get()
        ]);
    }
    public function store(Request $request)
    {
        $users = User::where('nik', $request->nik)->where('status', 'Ditolak')->get();


        if ($users->count()) {
            $validatedData = $request->validate([
                'nik' => 'required|min:16|max:16',
                'nama' => 'required',
                'tanggal_lahir' => 'required',
                'tempat_lahir' => 'required',
                'alamat' => 'required',
                'pekerjaan' => 'required',
                'no_hp' => 'required',
                'ktp' => 'required',
                'with_ktp' => 'required',
                'password' => 'required|min:5',
                'status' => 'required',
            ]);
            $user = User::find($users[0]->id);
            if ($request->file('ktp') && $request->file('with_ktp')) {
                if ($user->ktp && $user->with_ktp) {
                    Storage::delete($user->ktp);
                    Storage::delete($user->with_ktp);
                }
                $validatedData['ktp'] = $request->file('ktp')->store('ktp');
                $validatedData['with_ktp'] = $request->file('with_ktp')->store('with_ktp');
            }
            $validatedData['rt_id'] = $request->rt_id;
            $validatedData['password'] = bcrypt($request->password);
            $validatedData['jenis_kelamin'] = $request->jenis_kelamin;
            $validatedData['agama'] = $request->agama;
            $validatedData['status_perkawinan'] = $request->status_perkawinan;
            $validatedData['role'] = $request->role;
            User::where('nik', $request->nik)->where('status', 'Ditolak')->update($validatedData);
            return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan tunggu validasi');
        } else {
            $validatedData = $request->validate([
                'nik' => 'required|unique:users|min:16|max:16',
                'nama' => 'required',
                'tanggal_lahir' => 'required',
                'tempat_lahir' => 'required',
                'alamat' => 'required',
                'pekerjaan' => 'required',
                'no_hp' => 'required',
                'ktp' => 'required',
                'with_ktp' => 'required',
                'password' => 'required|min:5',
                'status' => 'required',
            ]);
            $validatedData['ktp'] = $request->file('ktp')->store('ktp');
            $validatedData['with_ktp'] = $request->file('with_ktp')->store('with_ktp');
            $validatedData['rt_id'] = $request->rt_id;
            $validatedData['password'] = bcrypt($request->password);
            $validatedData['jenis_kelamin'] = $request->jenis_kelamin;
            $validatedData['agama'] = $request->agama;
            $validatedData['status_perkawinan'] = $request->status_perkawinan;
            $validatedData['role'] = $request->role;
            User::create($validatedData);
            return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan tunggu validasi');
        }
    }
}
