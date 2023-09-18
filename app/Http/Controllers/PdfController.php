<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Surat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    public function cetak_sktm($id){

        $surats = Surat::where('id', $id)->get();
        $path = base_path('/public/assets/img/ttd/ttd.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $pdf = Pdf::loadView('pdf.cetak_sktm',['surats' => $surats, 'pic' =>$pic])->setPaper('a4', 'potrait');
        $namaPdf = 'SKTM_';
        foreach ($surats as $surat) {
        $namaPdf .= $surat->user->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }
    public function cetak_skd($id){

        $surats = Surat::where('id', $id)->get();
        $path = base_path('/public/assets/img/ttd/ttd.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $pdf = Pdf::loadView('pdf.cetak_skd',['surats' => $surats, 'pic' =>$pic])->setPaper('a4', 'potrait');
        $namaPdf = 'SKD_';
        foreach ($surats as $surat) {
        $namaPdf .= $surat->user->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }
    public function cetak_sku($id){

        $surats = Surat::where('id', $id)->get();

        $path = base_path('/public/assets/img/ttd/ttd.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $pdf = Pdf::loadView('pdf.cetak_sku',['surats' => $surats, 'pic' =>$pic])->setPaper('a4', 'potrait');
        $namaPdf = 'SKU_';
        foreach ($surats as $surat) {
        $namaPdf .= $surat->user->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }
    public function cetak_skj($id){

        $surats = Surat::where('id', $id)->get();
        $path = base_path('/public/assets/img/ttd/ttd.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $pdf = Pdf::loadView('pdf.cetak_skj',['surats' => $surats, 'pic' =>$pic])->setPaper('a4', 'potrait');
        $namaPdf = 'Surat Keterangan_';
        foreach ($surats as $surat) {
        $namaPdf .= $surat->user->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }
    public function cetak_skk($id){

        $surats = Surat::where('id', $id)->get();
        foreach ($surats as $surat) {
            $users = User::where('nik', $surat->nik)->get();
        }
        $path = base_path('/public/assets/img/ttd/ttd.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $pdf = Pdf::loadView('pdf.cetak_skk',
        [
            'surats' => $surats,
            'pic' =>$pic,
            'users' =>$users
        ])->setPaper('a4', 'potrait');
        $namaPdf = 'SKK_';
        foreach ($surats as $surat) {
        $namaPdf .= $surat->user->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }
    public function cetak_skkr($id){

        $surats = Surat::where('id', $id)->get();
        $path = base_path('/public/assets/img/ttd/ttd.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $pdf = Pdf::loadView('pdf.cetak_skkr',['surats' => $surats, 'pic' =>$pic])->setPaper('a4', 'potrait');
        $namaPdf = 'SKKR_';
        foreach ($surats as $surat) {
        $namaPdf .= $surat->user->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }
}
