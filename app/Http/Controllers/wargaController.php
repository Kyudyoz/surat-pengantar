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

    public function store(Request $request) {
        $validatedData = $request->validate([
            'keperluan' =>'required',
            'jenis_surat' =>'required',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['rt_id'] = auth()->user()->rt_id;
        Surat::create($validatedData);
        return redirect('/dashboard')->with('success', 'Surat Berhasil Diajukan!');
    }

    public function edit($id) {
        $surat = Surat::find($id);
        return view('warga.edit-surat',[
            'title' => 'Edit Surat',
            'active' => 'Dashboard Warga',
            'surat' => $surat
        ]);
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'keperluan' =>'required',
            'jenis_surat' =>'required',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['rt_id'] = auth()->user()->rt_id;
        Surat::where('id',$id)->update($validatedData);
        return redirect('/dashboard')->with('success', 'Surat Berhasil Diubah!');
    }

    public function destroy($id)
    {
       $surat = Surat::find($id);
        Surat::destroy($surat->id);

        return redirect('/dashboard')->with('success', 'Surat Berhasil Dihapus!');

    }

}
