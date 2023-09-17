<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Surat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboardRt()
    {

        $diproses = Surat::where('rt_id', auth()->user()->rt_id)
                    ->where('status', 'Diproses')
                    ->get();
        $jmlDiproses = $diproses->count();

        $warga = User::where('role' , 'Warga')->where('rt_id', auth()->user()->rt->id)->get();
        $jmlWarga = $warga->count();
        return view('rt.dashboard-rt',[
            'title' => 'Dashboard',
            'active' => 'Dashboard RT',
            'diproses' => $diproses,
            'jmlDiproses' => $jmlDiproses,
            'warga' => $warga,
            'jmlWarga' => $jmlWarga

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

        return view('warga.dashboard',[
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
        return view('blog.blog',[
            'title' => 'Bulian News',
            'active' => 'Blog'
        ]);
    }
    public function profil()
    {
        return view('profil',[
            'title' => 'Halaman Profil',
            'active' => 'Profil'
        ]);
    }
}
