<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\User;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function unggahTtd(){
        return view('rt.unggah-ttd',[
            'title' => 'Unggah Tanda Tangan',
            'active' => 'Unggah Tanda Tangan',
            'rts' => Rt::where('id', auth()->user()->rt_id)->get(),
        ]);
    }

    public function updateTtd(Request $request) {
        $rules = [
            'ttd'=> 'image|file|max:2048',
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('ttd')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['ttd'] = $request->file('ttd')->store('ttd');
        }
        $id = $request->id;
        $validatedData['id'] = $id;

        

        Rt::where('id', $id)->update($validatedData);
        return redirect('/unggahTtd')->with('success', 'Tanda Tangan Berhasil Diunggah!');
    }

    public function storeWarga(Request $request){
        // $validatedData['nama'] = $request->nama;
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

        $rt = Rt::find($surat->rt_id);

        if ($rt->ttd) {
            $surat->status = 'Disetujui';
    
            $surat->save();
            return redirect('/validasi')->with('success', 'Surat Berhasil Disetujui!');
        } else{
            return back()->with('ttdError', 'Anda Belum Mengunggah Tanda Tangan!');
        }
        

    }
    public function tolak($id)
    {

        $surat = Surat::find($id);

        $surat->status = 'Ditolak';

        $surat->save();
        return redirect('/validasi')->with('success', 'Surat Berhasil Ditolak!');
    }

}
