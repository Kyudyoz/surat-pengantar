<?php

namespace App\Http\Controllers;

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
}
