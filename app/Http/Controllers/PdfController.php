<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\User;
use App\Models\Surat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Crypt;


class PdfController extends Controller
{
    public function cetak_sktm($id){
        $id = Crypt::decrypt($id);

        $surats = Surat::where('id', $id)->get();
        $rt = Rt::where('id', $surats[0]->rt_id)->get();
        foreach ($rt as $ttd) {
            if ($ttd->ttd) {
                $path = base_path('/public/storage/' . $ttd->ttd);
            }else{
                $path = base_path('/public/assets/img/ttd/ttd.png');
            }
        }
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $path2 = base_path('/public/assets/img/ttd/qrcode.png');
        $type2 = pathinfo($path2, PATHINFO_EXTENSION);
        $data2 = file_get_contents($path2);
        $pic2 = 'data:image/' . $type2 . ';base64,' . base64_encode($data2);
        $pdf = Pdf::loadView('pdf.cetak_sktm',
        [
            'surats' => $surats, 
            'pic' =>$pic,
            'pic2' => $pic2
        ])->setPaper('a4', 'potrait');
        $namaPdf = 'SKTM_';
        foreach ($surats as $surat) {
        $namaPdf .= $surat->user->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }
    public function cetak_skd($id){

        $id = Crypt::decrypt($id);
        $surats = Surat::where('id', $id)->get();
        $rt = Rt::where('id', $surats[0]->rt_id)->get();
        foreach ($rt as $ttd) {
            if ($ttd->ttd) {
                $path = base_path('/public/storage/' . $ttd->ttd);
            }else{
                $path = base_path('/public/assets/img/ttd/ttd.png');
            }
        }
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $path2 = base_path('/public/assets/img/ttd/qrcode.png');
        $type2 = pathinfo($path2, PATHINFO_EXTENSION);
        $data2 = file_get_contents($path2);
        $pic2 = 'data:image/' . $type2 . ';base64,' . base64_encode($data2);
        $pdf = Pdf::loadView('pdf.cetak_skd',
        [
            'surats' => $surats, 
            'pic' =>$pic,
            'pic2'=>$pic2
        ])->setPaper('a4', 'potrait');
        $namaPdf = 'SKD_';
        foreach ($surats as $surat) {
        $namaPdf .= $surat->user->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }
    public function cetak_sku($id){

        $id = Crypt::decrypt($id);
        $surats = Surat::where('id', $id)->get();
        $rt = Rt::where('id', $surats[0]->rt_id)->get();
        foreach ($rt as $ttd) {
            if ($ttd->ttd) {
                $path = base_path('/public/storage/' . $ttd->ttd);
            }else{
                $path = base_path('/public/assets/img/ttd/ttd.png');
            }
        }
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $path2 = base_path('/public/assets/img/ttd/qrcode.png');
        $type2 = pathinfo($path2, PATHINFO_EXTENSION);
        $data2 = file_get_contents($path2);
        $pic2 = 'data:image/' . $type2 . ';base64,' . base64_encode($data2);
        $pdf = Pdf::loadView('pdf.cetak_sku',
        [
            'surats' => $surats, 
            'pic' =>$pic,
            'pic2'=>$pic2
        ])->setPaper('a4', 'potrait');
        $namaPdf = 'SKU_';
        foreach ($surats as $surat) {
        $namaPdf .= $surat->user->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }
    public function cetak_skj($id){

        $id = Crypt::decrypt($id);
        $surats = Surat::where('id', $id)->get();
        $rt = Rt::where('id', $surats[0]->rt_id)->get();
        foreach ($rt as $ttd) {
            if ($ttd->ttd) {
                $path = base_path('/public/storage/' . $ttd->ttd);
            }else{
                $path = base_path('/public/assets/img/ttd/ttd.png');
            }
        }
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $path2 = base_path('/public/assets/img/ttd/qrcode.png');
        $type2 = pathinfo($path2, PATHINFO_EXTENSION);
        $data2 = file_get_contents($path2);
        $pic2 = 'data:image/' . $type2 . ';base64,' . base64_encode($data2);
        $pdf = Pdf::loadView('pdf.cetak_skj',
        [
            'surats' => $surats, 
            'pic' =>$pic,
            'pic2'=>$pic2
        ])->setPaper('a4', 'potrait');
        $namaPdf = 'Surat Keterangan_';
        foreach ($surats as $surat) {
        $namaPdf .= $surat->user->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }
    public function cetak_skk($id){

        $id = Crypt::decrypt($id);
        $surats = Surat::where('id', $id)->get();
        foreach ($surats as $surat) {
            $users = User::where('nik', $surat->nik)->get();
        }
        $rt = Rt::where('id', $surats[0]->rt_id)->get();
        foreach ($rt as $ttd) {
            if ($ttd->ttd) {
                $path = base_path('/public/storage/' . $ttd->ttd);
            }else{
                $path = base_path('/public/assets/img/ttd/ttd.png');
            }
        }
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $path2 = base_path('/public/assets/img/ttd/qrcode.png');
        $type2 = pathinfo($path2, PATHINFO_EXTENSION);
        $data2 = file_get_contents($path2);
        $pic2 = 'data:image/' . $type2 . ';base64,' . base64_encode($data2);
        $pdf = Pdf::loadView('pdf.cetak_skk',
        [
            'surats' => $surats,
            'pic' =>$pic,
            'users' =>$users,
            'pic2'=>$pic2
        ])->setPaper('a4', 'potrait');
        $namaPdf = 'SKK_';
        foreach ($surats as $surat) {
        $namaPdf .= $surat->user->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }
    public function cetak_skkr($id){

        $id = Crypt::decrypt($id);
        $surats = Surat::where('id', $id)->get();
        $rt = Rt::where('id', $surats[0]->rt_id)->get();
        foreach ($rt as $ttd) {
            if ($ttd->ttd) {
                $path = base_path('/public/storage/' . $ttd->ttd);
            }else{
                $path = base_path('/public/assets/img/ttd/ttd.png');
            }
        }
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $path2 = base_path('/public/assets/img/ttd/qrcode.png');
        $type2 = pathinfo($path2, PATHINFO_EXTENSION);
        $data2 = file_get_contents($path2);
        $pic2 = 'data:image/' . $type2 . ';base64,' . base64_encode($data2);
        $pdf = Pdf::loadView('pdf.cetak_skkr',
        [
            'surats' => $surats, 
            'pic' =>$pic,
            'pic2'=>$pic2
        ])->setPaper('a4', 'potrait');
        $namaPdf = 'SKKR_';
        foreach ($surats as $surat) {
        $namaPdf .= $surat->user->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }
}
