<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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

        $user = User::where('nik', $request->nik)->first();

            if (!$user) {
        // Jika 'nik' tidak ditemukan, kembalikan pesan error
            return back()->with('ttdError', 'NIK tidak ditemukan.');
        }
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

    public function editSktm($id) {
        $id = Crypt::decrypt($id);
        $surat = Surat::find($id);
        return view('surat.edit_sktm',[
            'title' => 'Edit Surat',
            'active' => 'Dashboard Warga',
            'surat' => $surat
        ]);
    }

    public function updateSktm(Request $request, $id){
        $validatedData = $request->validate([
            'keperluan' =>'required',
        ]);
        $user = User::where('nik', $request->nik)->first();
            if (!$user) {
            return back()->with('ttdError', 'NIK tidak ditemukan.');
        }
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
        Surat::where('id',$id)->update($validatedData);
        return redirect('/dashboard')->with('success', 'Surat Berhasil Diubah!');
    }
    public function editSku($id) {
        $id = Crypt::decrypt($id);
        $surat = Surat::find($id);
        return view('surat.edit_sku',[
            'title' => 'Edit Surat',
            'active' => 'Dashboard Warga',
            'surat' => $surat
        ]);
    }

    public function updateSku(Request $request, $id){
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
        Surat::where('id',$id)->update($validatedData);
        return redirect('/dashboard')->with('success', 'Surat Berhasil Diubah!');
    }
    public function editSkd($id) {
        $id = Crypt::decrypt($id);
        $surat = Surat::find($id);
        return view('surat.edit_skd',[
            'title' => 'Edit Surat',
            'active' => 'Dashboard Warga',
            'surat' => $surat
        ]);
    }

    public function updateSkd(Request $request, $id){
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
        Surat::where('id',$id)->update($validatedData);
        return redirect('/dashboard')->with('success', 'Surat Berhasil Diubah!');
    }
    public function editSkj($id) {
        $id = Crypt::decrypt($id);
        $surat = Surat::find($id);
        return view('surat.edit_skj',[
            'title' => 'Edit Surat',
            'active' => 'Dashboard Warga',
            'surat' => $surat
        ]);
    }

    public function updateSkj(Request $request, $id){
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
        Surat::where('id',$id)->update($validatedData);
        return redirect('/dashboard')->with('success', 'Surat Berhasil Diubah!');
    }
    public function editSkk($id) {
        $id = Crypt::decrypt($id);
        $surat = Surat::find($id);
        return view('surat.edit_skk',[
            'title' => 'Edit Surat',
            'active' => 'Dashboard Warga',
            'surat' => $surat
        ]);
    }

    public function updateSkk(Request $request, $id){
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
        Surat::where('id',$id)->update($validatedData);
        return redirect('/dashboard')->with('success', 'Surat Berhasil Diubah!');
    }
    public function editSkkr($id) {
        $id = Crypt::decrypt($id);
        $surat = Surat::find($id);
        return view('surat.edit_skkr',[
            'title' => 'Edit Surat',
            'active' => 'Dashboard Warga',
            'surat' => $surat
        ]);
    }

    public function updateSkkr(Request $request, $id){
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
