<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function tambahUser() {
        
        return view('admin.tambah-user',[
            'title' => 'Tambah User',
            'active' => 'Data User',
            'rts' => Rt::orderBy('nama_rt')->get()
        ]);
    }

    public function tambahRt() {
        return view('admin.tambah-rt',[
            'title' => 'Tambah RT',
            'active' => 'Tambah RT',

        ]);
    }

    public function dataRt() {

        return view('admin.data-rt',[
            'title' => 'Data RT',
            'active' => 'Data RT',
            'rts' => Rt::orderBy('nama_rt')->get()
        ]);
        
    }

    public function dataUser() {
        return view('admin.data-user',[
            'title' => 'Data User',
            'active' => 'Data Warga',
        ]);
    }

    public function storeUser(Request $request) {
        $validatedData = $request->validate([
            'nik' => 'required|unique:users',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'password' => 'required',
        ]);
        $validatedData['rt_id'] = $request->rt_id;
        $validatedData['password'] = bcrypt($request->password);
        $validatedData['jenis_kelamin'] = $request->jenis_kelamin;
        $validatedData['agama'] = $request->agama;
        $validatedData['status_perkawinan'] = $request->status_perkawinan;
        $validatedData['no_hp'] = $request->no_hp;
        $validatedData['role'] = $request->role;
        User::create($validatedData);
        return redirect('/dataUser')->with('success', 'User Berhasil Ditambah!');
    }
    
    public function storeRt(Request $request) {
        $validatedData = $request->validate([
            'nama_rt' => 'required|unique:rts'
        ]);
        $validatedData['nama_rt'] = strtoupper($validatedData['nama_rt']);

        Rt::create($validatedData);
        return redirect('/dataRt')->with('success', 'RT Berhasil Ditambah!');
    }

    public function lihatDetailRt($id) {
        $id = Crypt::decrypt($id);
        $rts = Rt::where('id', $id)->get();
        $users = User::where('rt_id', $id)->where('role', 'Warga')->get();
        return view('admin.detail-rt',[
            'title' => 'Detail RT',
            'active' => 'Data RT',
            'rts' => $rts,
            'users' => $users
        ]);
    }

    public function updateRt(Request $request, $id) {
        $rt = Rt::find($id);
        $rt->nama_ketua = $request->nama_ketua;
        $rt->ttd = null;
        $rt->save();
        $users = User::where('rt_id', $id)->get();
        foreach ($users as $user) {
            $user->role = 'Warga';
            $user->save();
        }
        $ketuas = User::where('nama', $request->nama_ketua)->get();
        foreach ($ketuas as $ketua) {
            $ketua->role = 'Ketua';
            $ketua->save();
        }
        return redirect('/dataRt')->with('success', 'Ketua RT Berhasil Diubah!');
    }
}
