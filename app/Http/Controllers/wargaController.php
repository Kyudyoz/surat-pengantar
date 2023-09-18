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
    public function buatSktm() {
        return view('surat.buat_sktm',[
            'title' => 'Buat SKTM',
            'active' => 'Buat Surat',
        ]);
    }
    public function buatSkkr() {
        return view('surat.buat_skkr',[
            'title' => 'Buat SKKR',
            'active' => 'Buat Surat',
        ]);
    }
    public function buatSku() {
        return view('surat.buat_sku',[
            'title' => 'Buat SKU',
            'active' => 'Buat Surat',
        ]);
    }
    public function buatSkd() {
        return view('surat.buat_skd',[
            'title' => 'Buat SKD',
            'active' => 'Buat Surat',
        ]);
    }
    public function buatSkk() {
        return view('surat.buat_skk',[
            'title' => 'Buat SKK',
            'active' => 'Buat Surat',
        ]);
    }
    public function buatSkj() {
        return view('surat.buat_skj',[
            'title' => 'Buat SKJ',
            'active' => 'Buat Surat',
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'keperluan' =>'required',
        ]);
        $validatedData['jenis_surat'] = $request->jenis_surat;
        $validatedData['nik'] = $request->nik;
        $validatedData['lokasi'] = $request->lokasi;
        $validatedData['tinggal'] = $request->tinggal;
        $validatedData['bidang_usaha'] = $request->bidang_usaha;
        $validatedData['nama_usaha'] = $request->nama_usaha;
        $validatedData['tanggal_kematian'] = $request->tanggal_kematian;
        $validatedData['jam_kematian'] = $request->jam_kematian;
        $validatedData['tempat_kematian'] = $request->tempat_kematian;
        $validatedData['penyebab_kematian'] = $request->penyebab_kematian;
        $validatedData['tempat_dimakamkan'] = $request->tempat_dimakamkan;
        $validatedData['jenis_cerai'] = $request->jenis_cerai;
        $validatedData['nama_pasangan'] = $request->nama_pasangan;
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
