<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function tambahUser($id)
    {
        $id = Crypt::decrypt($id);
        $rt = Rt::find($id);
        return view('admin.tambah-user', [
            'title' => 'Tambah Akun RT',
            'active' => 'Data RT',
            'rt' => $rt
        ]);
    }

    public function tambahRt()
    {
        return view('admin.tambah-rt', [
            'title' => 'Tambah RT',
            'active' => 'Tambah RT',

        ]);
    }

    public function dataRt()
    {

        return view('admin.data-rt', [
            'title' => 'Data RT',
            'active' => 'Data RT',
            'rts' => Rt::orderBy('nama_rt')->get()
        ]);
    }

    public function dataUser()
    {
        return view('admin.data-user', [
            'title' => 'Data User',
            'active' => 'Data Warga',
        ]);
    }

    public function storeUser(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|unique:users|min:16|max:16|numeric',
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
        $validatedData['status'] = $request->status;
        User::create($validatedData);
        $rts = Rt::find($request->rt_id);
        $rts->nama_ketua = $request->nama;
        $rts->save();
        return redirect('/dataUser')->with('success', 'User Berhasil Ditambah!');
    }

    public function storeRt(Request $request)
    {
        $validatedData = $request->validate([
            'nama_rt' => 'required|unique:rts'
        ]);

        $validatedData['nama_rt'] = strtoupper($validatedData['nama_rt']);



        Rt::create($validatedData);
        return redirect('/dataRt')->with('success', 'RT Berhasil Ditambah!');
    }

    public function lihatDetailRt($id)
    {
        $id = Crypt::decrypt($id);
        $rts = Rt::where('id', $id)->get();
        $users = User::where('rt_id', $id)->where('role', 'Warga')->get();
        return view('admin.detail-rt', [
            'title' => 'Detail RT',
            'active' => 'Data RT',
            'rts' => $rts,
            'users' => $users
        ]);
    }

    public function updateRt(Request $request, $id)
    {
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

    public function validasiAkun()
    {
        $users = User::where('status', 'Disetujui RT')->latest()->simplePaginate(5);
        $users2 = User::where('status', 'Disetujui Admin')->orWhere('status', 'Ditolak RT')->orWhere('status', 'Ditolak Admin')->orderBy('status', 'DESC')->latest()->simplePaginate(5);
        return view('admin.validasi-admin', [
            'title' => 'Validasi Akun',
            'active' => 'Validasi Akun User',
            'users' => $users,
            'users2' => $users2,
        ]);
    }

    public function setujuiAkun($id)
    {
        $id = Crypt::decrypt($id);

        $user = User::find($id);

        $user->status = 'Disetujui Admin';

        $user->save();

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
                'message' => "Pengajuan registrasi akun anda dengan disetujui oleh Admin. \r\nSilahkan Login : https://kelompok3.rsix.site/login",
                'countryCode' => '62', //optional
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: xNs9nSws9bqjaBxD04WQ' //change TOKEN to your actual token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return redirect('/validasiAkun')->with('success', 'Akun Berhasil Disetujui!');
    }

    public function tolakAkun($id)
    {
        $id = Crypt::decrypt($id);

        $user = User::find($id);

        $user->status = 'Ditolak Admin';

        $user->save();

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
                'message' => "Pengajuan registrasi akun anda ditolak oleh Admin. \r\nHubungi RT setempat melalui : https://kelompok3.rsix.site/infoRt",
                'countryCode' => '62', //optional
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: xNs9nSws9bqjaBxD04WQ' //change TOKEN to your actual token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return redirect('/validasiAkun')->with('success', 'Akun Berhasil Ditolak!');
    }
}
