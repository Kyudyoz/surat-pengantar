@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        @foreach ($users as $user)
        <h1 class="h3 mb-3">Detail <strong>{{ $user->nama }}</strong></h1>

        <div class="row">
            <div class="col-xl-10 col-xxl-10 d-flex">
                <div class="w-100">
                    <div class="row justify-content-center">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-12 mt-3">
                                            <div class="row justify-content-center">
                                                <div class="col-sm-6">
                                                    <h5><strong>Nama Lengkap</strong></h5>
                                                    <p class="text-muted">{{ $user->nama }}</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>NIK</strong></h5>
                                                    <p class="text-muted">{{ $user->nik }}</p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-6">
                                                    <h5><strong>Tempat Lahir</strong></h5>
                                                    <p class="text-muted">{{ $user->tempat_lahir }}</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>Tanggal Lahir</strong></h5>
                                                    <p class="text-muted">{{ \Carbon\Carbon::parse($user->tanggal_lahir)->isoFormat('D MMMM Y') }}</p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-6">
                                                    <h5><strong>Alamat</strong></h5>
                                                    <p class="text-muted">{{ $user->alamat }}</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>Jenis Kelamin</strong></h5>
                                                    <p class="text-muted">{{ $user->jenis_kelamin }}</p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-6">
                                                    <h5><strong>Agama</strong></h5>
                                                    <p class="text-muted">{{ $user->agama }}</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>Status Perkawinan</strong></h5>
                                                    <p class="text-muted">{{ $user->status_perkawinan }}</p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-6">
                                                    <h5><strong>Pekerjaan</strong></h5>
                                                    <p class="text-muted">{{ $user->pekerjaan }}</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>No. Handphone</strong></h5>
                                                    @if ($user->no_hp)
                                                    <p class="text-muted">
                                                        <a href="https://wa.me/{{ $user->no_hp }}" class="btn btn-success">
                                                            <i class="fa-brands fa-whatsapp fa-xl"></i> +{{ $user->no_hp }}
                                                        </a>
                                                    </p>
                                                    @else
                                                    <p class="text-muted">-</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-6 mt-2">
                                                    <h5><strong>Foto KTP/KK</strong></h5>
                                                    <img src="{{ asset('storage/'. $user->ktp) }}" title="ktp"
                                                            width="200" height="200">
                                                </div>
                                                <div class="col-sm-6 mt-2">
                                                    <h5><strong>Foto bersama KTP/KK</strong></h5>
                                                    <img src="{{ asset('storage/'. $user->with_ktp) }}" title="withktp"
                                                            width="200" height="200">
                                                </div>
                                            </div>
                                            @if (auth()->user()->role == 'Ketua')                                                
                                                @if ($user->status == 'Menunggu Validasi')    
                                                <div class="row mt-4">
                                                    <div class="col-sm-6 mt-4">
                                                        <a href="/setujuiAkun/{{ Crypt::encrypt($user->id) }}" class="btn btn-success w-100">
                                                            Setujui
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6 mt-4">
                                                        <a href="/tolakAkun/{{ Crypt::encrypt($user->id) }}" class="btn btn-danger w-100">
                                                            Tolak
                                                        </a>
                                                    </div>
                                                </div>
                                                @endif
                                                @elseif(auth()->user()->role == 'Admin')
                                                @if ($user->status == 'Disetujui RT')    
                                                <div class="row mt-4">
                                                    <div class="col-sm-6 mt-4">
                                                        <a href="/setujuiAkunAdmin/{{ Crypt::encrypt($user->id) }}" class="btn btn-success w-100">
                                                            Setujui
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6 mt-4">
                                                        <a href="/tolakAkunAdmin/{{ Crypt::encrypt($user->id) }}" class="btn btn-danger w-100">
                                                            Tolak
                                                        </a>
                                                    </div>
                                                </div>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection
