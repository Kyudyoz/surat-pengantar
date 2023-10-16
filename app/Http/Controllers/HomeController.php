<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\User;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{

    public function index()
    {
        return view('landing', [
            'title' => 'Tanda RT',
            'active' => 'landing'
        ]);
    }
    public function dashboardRt()
    {

        $diproses = Surat::where('rt_id', auth()->user()->rt_id)
            ->where('status', 'Diproses')
            ->get();
        $jmlDiproses = $diproses->count();

        $warga = User::where('role', 'Warga')->where('rt_id', auth()->user()->rt->id)->where('status', 'Disetujui Admin')->get();
        $validasi = User::where('role', 'Warga')->where('rt_id', auth()->user()->rt->id)->where('status', 'Menunggu Validasi')->get();
        $jmlWarga = $warga->count();
        $jmlValidasi = $validasi->count();
        return view('rt.dashboard-rt', [
            'title' => 'Dashboard',
            'active' => 'Dashboard RT',
            'diproses' => $diproses,
            'jmlDiproses' => $jmlDiproses,
            'warga' => $warga,
            'jmlWarga' => $jmlWarga,
            'validasi' => $validasi,
            'jmlValidasi' => $jmlValidasi,

        ]);
    }
    public function dashboardAdmin()
    {
        $rts = Rt::all();
        $jmlRt = $rts->count();
        $user = User::where('role', '!=', 'Admin')->where('status', 'Disetujui Admin')->get();
        $validasi = User::where('role', '!=', 'Admin')->where('status', 'Disetujui RT')->get();
        $jmlUser = $user->count();
        $jmlValidasi = $validasi->count();


        return view('admin.dashboard-admin', [
            'title' => 'Dashboard',
            'active' => 'Dashboard Admin',
            'rts' => $rts,
            'jmlRt' => $jmlRt,
            'user' => $user,
            'jmlUser' => $jmlUser,
            'jmlValidasi' => $jmlValidasi


        ]);
    }
    public function dashboard()
    {
        $surats = Surat::where('user_id', auth()->user()->id)
            ->get();
        $disetujui = Surat::where('user_id', auth()->user()->id)
            ->where('status', 'Disetujui')
            ->get();
        $ditolak = Surat::where('user_id', auth()->user()->id)
            ->where('status', 'Ditolak')
            ->get();
        $diproses = Surat::where('user_id', auth()->user()->id)
            ->where('status', 'Diproses')
            ->get();
        $surats2 = Surat::where('user_id', auth()->user()->id)
            ->latest()->simplePaginate(2);
        $jmlSurat = $surats->count();
        $jmlDisetujui = $disetujui->count();
        $jmlDitolak = $ditolak->count();
        $jmlDiproses = $diproses->count();

        return view('warga.dashboard', [
            'title' => 'Dashboard',
            'active' => 'Dashboard Warga',
            'disetujui' => $disetujui,
            'jmlDisetujui' => $jmlDisetujui,
            'ditolak' => $ditolak,
            'jmlDitolak' => $jmlDitolak,
            'diproses' => $diproses,
            'jmlDiproses' => $jmlDiproses,
            'surats' => $surats,
            'surats2' => $surats2,
            'jmlSurat' => $jmlSurat
        ]);
    }
    public function blog()
    {
        return view('blog.blog', [
            'title' => 'Bulian News',
            'active' => 'Blog'
        ]);
    }
    public function profil()
    {

        $users = User::where('id', auth()->user()->id)->get();
        return view('profil', [
            'title' => 'Halaman Profil',
            'active' => 'Profil',
            'users' => $users
        ]);
    }
    public function pengaturan()
    {

        $users = User::where('id', auth()->user()->id)->get();
        return view('pengaturan', [
            'title' => 'Pengaturan Akun',
            'active' => 'Profil',
            'users' => $users
        ]);
    }

    public function infoRt()
    {
        return view('info-rt', [
            'title' => 'Informasi RT/RW',
            'active' => 'Info RT',
            // 'users' => User::where('role', 'Ketua')->orderBy('rt_id')->get()
            'users' => User::where('role', 'Ketua')
                ->leftJoin('rts', 'users.rt_id', '=', 'rts.id')
                ->orderBy('rts.nama_rt')
                ->simplePaginate(5)
        ]);
    }

    public function editPass()
    {

        $users = User::where('id', auth()->user()->id)->get();
        return view('edit_password', [
            'title' => 'Edit Password',
            'active' => 'Profil',
            'users' => $users
        ]);
    }

    public function update(Request $request)
    {
        $rules = [
            'nama' => 'required|max:255',
            'image' => 'image|file|max:1024',
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('user-images');
        }
        $id = $request->id;
        $validatedData['id'] = $id;

        User::where('id', $id)->update($validatedData);
        return redirect('/pengaturan')->with('success', 'Foto Profil Berhasil Diubah');
    }

    public function updateNoHp(Request $request)
    {
        $validatedData['alamat'] = $request->alamat;
        $validatedData['agama'] = $request->agama;
        $validatedData['status_perkawinan'] = $request->status_perkawinan;
        $validatedData['pekerjaan'] = $request->pekerjaan;
        $validatedData['no_hp'] = $request->no_hp;
        User::where('id', auth()->user()->id)->update($validatedData);
        return redirect('/profil')->with('success', 'Profil Berhasil Diubah!');
    }
    public function updatePass(Request $request)
    {

        $validatedData['password'] = bcrypt($request->password);
        User::where('id', auth()->user()->id)->update($validatedData);

        return redirect('/pengaturan')->with('success', 'Password berhasil diubah!');
    }
}
