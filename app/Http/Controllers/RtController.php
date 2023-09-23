<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Surat;
use Illuminate\Http\Request;

class RtController extends Controller
{
    public function validasi()
    {
        $surats2 = Surat::where('rt_id', auth()->user()->rt_id)
        ->orderBy('status')
        ->simplePaginate(5);
        return view('rt.validasi',[
            'title' => 'Validasi Surat Pengantar',
            'active' => 'Validasi',
            'surats2' => $surats2,
        ]);
    }
    public function dataWarga()
    {
        // $users = User::where('rt_id', auth()->user()->rt_id)
        // ->where('role', 'Warga')
        // ->paginate(5);
        return view('rt.data-warga',[
            'title' => 'Data Warga',
            'active' => 'Data Warga',
            // 'users' => $users,
        ]);
    }

    public function tambahWarga(){
        return view('rt.tambah-warga',[
            'title' => 'Data Warga',
            'active' => 'Data Warga',
        ]);
    }

    public function storeWarga(Request $request){
        $validatedData['rt_id'] = $request->rt_id;
        $validatedData['nama'] = $request->nama;
        $validatedData['nik'] = $request->nik;
        $validatedData['password'] = bcrypt($request->password);
        $validatedData['tempat_lahir'] = $request->tempat_lahir;
        $validatedData['tanggal_lahir'] = $request->tanggal_lahir;
        $validatedData['jenis_kelamin'] = $request->jenis_kelamin;
        $validatedData['alamat'] = $request->alamat;
        $validatedData['agama'] = $request->agama;
        $validatedData['status_perkawinan'] = $request->status_perkawinan;
        $validatedData['pekerjaan'] = $request->pekerjaan;
        $validatedData['no_hp'] = $request->no_hp;
        $validatedData['role'] = $request->role;
        User::create($validatedData);
        return redirect('/dataWarga')->with('success', 'Warga Berhasil Ditambah!');
    }

    public function detail($id)
    {

        $users = User::where('id', $id)->get();
        return view('rt.detail-warga',[
            'title' => 'Data Warga',
            'active' => 'Data Warga',
            'users' => $users
        ]);
    }

    public function setuju($id)
    {

        $surat = Surat::find($id);

        $surat->status = 'Disetujui';

        $surat->save();
        return redirect('/validasi')->with('success', 'Surat Berhasil Disetujui!');
    }
    public function tolak($id)
    {

        $surat = Surat::find($id);

        $surat->status = 'Ditolak';

        $surat->save();
        return redirect('/validasi')->with('success', 'Surat Berhasil Ditolak!');
    }

}
