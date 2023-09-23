@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Informasi RT/RW</h1>

        <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Daftar Ketua RT</h5>
                            </div>
                            <table class="table table-hover my-0 text-center">
                                @if ($users->count())
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>RT</th>
                                        <th>Nomor Telepon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->alamat }}</td>
                                        <td>
                                            {{ $user->rt->nama_rt }}
                                        </td>
                                        <td>
                                            @if ($user->no_hp)
                                            <a href="https://wa.me/{{ $user->no_hp }}" class="btn btn-success">
                                                <i class="fa-brands fa-whatsapp fa-xl"></i> +{{ $user->no_hp }}
                                            </a>
                                            @else
                                            -
                                            @endif
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                @endif
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-xl-12 col-xxl-12 d-flex mt-4">
            <div class="w-100">
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-8">
                        <div class="card">
                            <p><h1 class="text-center mt-2">Tata Tertib RT/RW</h1></p>
                            <p><h5 class="text-center"><strong>BUKU TATA TERTIB DAN PANDUAN WARGA</strong></h5></p>
                            <p><h5 class="text-center"><strong>RUKUN TETANGGA DAN RUKUN WARGA KELURAHAN MUARA BULIAN</strong></h5></p>
                            <p class="text-center">BAB I</p>
                            <p class="text-center">PENDAHULUAN</p>
                            <p class="mx-3">Warga RT dan RW Kelurahan Muara Bulian adalah warga yang menetap di wilayah RT dan RW kelurahan Muara Bulian</p>
                            <p class="text-center">BAB II</p>
                            <p class="text-center">KEDUDUKAN DAN STATUS WARGA</p>
                            <ol class="mx-2">
                                <li>RT dan RW berada di bawah Kelurahan Muara Bulian, Kecamatan Muara Bulian, Kabupaten Batanghari, Jambi.</li>
                                <li>Warga RT adalah warga yang menetap dan tinggal di wilayah RT dan RW keluarahan Muara Bulian, baik dirumah milik sendiri ataupun kontrakan.</li>
                            </ol>
                            <p class="text-center">BAB III</p>
                            <p class="text-center">HAK DAN KEWAJIBAN WARGA</p>
                            <ol class="mx-2">
                                <li>HAK WARGA</li>
                                <dt style="font-weight: 400" class="my-2 mx-2">
                                    <ol>
                                        <li>Setiap warga berhak mengeluarkan pendapat baik lisan maupun tulisan untuk disampaikan kepada pengurus RT.</li>
                                        <li>Setiap warga berhak mengikuti setiap kegiatan yang diadakan dilingkungan RT.</li>
                                        <li>Setiap warga berhak memilih dan dipilih sebagai ketua RT maupun pengurus RT.</li>
                                        <li>Setiap warga berhak mengetahui laporan keuangan dan kas RT secara proposional.</li>
                                        <li>Setiap warga berhak mendapatkan perlindungan keamanan, ketentraman dan kebersihan lingkungan yang diwujudkan secara bersama sama dalam satu kesatuan rukun tetangga.</li>
                                        <li>Setiap warga berhak meminjam inventaris yang dimiliki RT untuk keperluan hajatan keluarga.</li>
                                        <li>Setiap warga berhak mendapatkan keamanan dan perlindungan dalam menjalankan ibadah keagamaan sesuai dengan kepercayaannya.</li>
                                    </ol>
                                </dt>
                                <li>KEWAJIBAN WARGA</li>
                                <dt style="font-weight: 400" class="my-2 mx-2">
                                    <ol>
                                        <li>Warga yang menetap ataupun kontrak diwajibkan memiliki  identitas diri (KTP) permanent dan atau KTP musiman.</li>
                                        <li>Setiap warga baru berkewajiban melaporkan ke Ketua RT dengan membawa fotocopy KTP, KK atau  fotocopy identitas diri lainnya yang diakui oleh undang undang.</li>
                                        <li>Setiap warga wajib menghadiri pertemuan (Rapat warga), sesuai dengan undangan dari Ketua RT. Apabila berhalangan maka secara otomatis menyetujui hasil keputusan rapat yang telah disepakati oleh warga yang hadir pada saat itu.</li>
                                        <li>Setiap warga berkewajiban mematuhi hasil rapat pengurus RT dengan warga keseluruhan.</li>
                                        <li>Setiap warga berkewajiban mematuhi Peraturan Peraturan yang disepakati RT dan RW.</li>
                                        <li>Setiap Warga wajib berpartisipasi aktif dalam hal menjaga keamanan, kebersihan, ketertiban, kerukunan bersama, masalah sosial kemasyarakatan, saling tolong menolong sesama warga di saat ada yang tertimpa musibah dan saat mendapatkan ancaman keamanan</li>
                                        <li>Ikut bertanggung jawab atas pemeliharaan inventaris RT</li>
                                    </ol>
                                </dt>
                            </ol>
                            <p class="text-center">BAB IV</p>
                            <p class="text-center">SOSIAL KEMASYARAKATAN</p>
                            <ol class="mx-2">
                                <li>Setiap warga, baik yang berstatus tempat tinggal tetap, sewa atau kontrak ataupun kost, wajib mengikuti kegiatan-kegiatan yang dilakukan di wilayah RT, seperti :</li>
                                <dt style="font-weight: 400" class="my-2 mx-2">
                                    <ul>
                                        <li>Pertemuan Rutin Warga.</li>
                                        <li>Kerja Bakti Warga.</li>
                                        <li>Kegiatan Keagamaan.</li>
                                        <li>Kegiatan Sosial lainnya.</li>
                                    </ul>
                                </dt>
                                <li>Apabila ada warga yang tertimpa musibah kematian, bersama pengurus RT dan warga yang lain wajib membantu sampai terselenggaranya pemakaman.</li>
                                <li>Apabila ada warga yang tertimpa musibah sakit dan dirawat dirumah sakit, warga dimohonkan untuk mengikuti besuk yang dikoordinir oleh pengurus RT.</li>
                            </ol>
                            <p class="text-center">BAB V</p>
                            <p class="text-center">KEAMANAN LINGKUNGAN</p>
                            <ol class="mx-2">
                                <li>Apabila terjadi pencurian, segera lapor ke pihak keamanan RT, apabila dirasa perlu, bersama pengurus RT, warga bisa lapor polisi terdekat.</li>
                                <li>Bila warga kedatangan tamu yang mengaku petugas (dari instansi manapun), harap selalu menanyakan surat perintah penugasan. Jika dirasa mencurigakan, bisa menghubungi pengurus RT.</li>
                                <li>Dilarang keras melakukan kegiatan-kegiatan yang mengganggu keamanan dan ketertiban umum, bersifat hura hura, minum minuman keras di wilayah RT. Setiap pelanggaran akan mendapatkan teguran keras, dan diserahkan kepada pihak yang berwajib (polisi) sesuai dengan tingkat pelanggaran yang dilakukan.</li>
                                <li>Bagi warga diluar RT dilarang melakukan kegiatan dalam bentuk apapun di wilayah RT tanpa adanya persetujuan atau ijin dari RT.</li>
                                <li>Warga atau tamu warga yang tertangkap melakukan tindakan asusila, narkoba, perjudian ataupun tindakan kriminal lainnya akan diserahkan pada aparat yang berwenang untuk diproses lebih lanjut.</li>
                            </ol>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
</main>
@endsection
