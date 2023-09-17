<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class wargaController extends Controller
{

    public function buatSurat() {
        return view('warga.buat-surat',[
            'title' => 'Buat Surat',
            'active' => 'Buat Surat',
        ]);
    }
    public function destroy($id)
    {
       $surat = Surat::find($id);
        Surat::destroy($surat->id);

        return redirect('/dashboard')->with('success', 'Task Created Successfully!');

    }

}
