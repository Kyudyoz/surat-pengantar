<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ URL::asset('/img/surat.png') }}" type="image/png">
    <title>Surat Keterangan Tidak Mampu</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
        }


    </style>
</head>
<body>
    @foreach ($surats as $surat)
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mt-4 mb-0">Pemerintah Kabupaten Batanghari</h2>
                <h2 class="text-center mb-0">Kecamatan Muara Bulian</h2>
                <h2 class="text-center">Kelurahan Muara Bulian</h2>
                <h2 class="text-center">{{ $surat->rt->nama_rt}}</h2>
            </div>
            <table><tr><td class="border border-2"></td></tr></table>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 style="text-decoration: underline" class="fs-2 mt-4">Surat Keterangan Tidak Mampu</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-2">
                <p>Yang bertanda tangan di bawah ini Ketua {{ $surat->rt->nama_rt }} menerangkan bahwa :</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <td width="30%">Nama</td>
                        <td width="2%">:</td>
                        <td>{{ $surat->user->nama }}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{ $surat->user->nik }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $surat->user->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{ $surat->user->tempat_lahir }}/{{ \Carbon\Carbon::parse($surat->user->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $surat->user->alamat}}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $surat->user->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Keperluan</td>
                        <td>:</td>
                        <td>{{ $surat->keperluan }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="keterangan">
            <p class="mt-4">Bahwa warga tersebut di atas adalah benar-benar keluarga tidak mampu.</p>
            <p>Demikian surat keterangan ini kami buat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.</p>
        </div>
        <div class="container1" style="margin-top: 10%">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <p style="text-align: center"> Muara Bulian, {{ $surat->created_at->isoFormat('D MMMM Y') }}</p>
                    <p style="text-align: center">Ketua {{ $surat->rt->nama_rt }}</p>
                    @if ($surat->status == 'Disetujui')
                    <div class="text-center" style="text-align: center">
                        <img src="{{ $pic }}" alt="ttd" border="0" width="100">
                    </div>
                    @endif
                    <p style="text-align: center;padding-top:10%">{{ $surat->rt->nama_ketua }}</p>
                </div>
            </div>
        </div>


    </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
