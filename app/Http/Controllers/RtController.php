<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class RtController extends Controller
{
    public function validasi()
    {
        $surats2 = Surat::where('rt_id', auth()->user()->rt_id)
        ->orderBy('status')
        ->simplePaginate(2);
        return view('rt.validasi',[
            'title' => 'Validasi Surat Pengantar',
            'active' => 'Validasi',
            'surats2' => $surats2,
        ]);
    }
    public function dataWarga()
    {
        return view('rt.data-warga',[
            'title' => 'Data Warga',
            'active' => 'Data Warga'
        ]);
    }
}
