<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RtController extends Controller
{
    public function validasi()
    {
        return view('rt.validasi',[
            'title' => 'Validasi Surat Pengantar',
            'active' => 'Validasi'
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
