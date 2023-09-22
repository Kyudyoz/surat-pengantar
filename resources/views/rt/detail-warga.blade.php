@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        @foreach ($users as $user)
        <h1 class="h3 mb-3">Detail <strong>{{ $user->nama }}</strong></h1>

        <div class="row">
            <div class="col-xl-10 col-xxl-10 d-flex">
                <div class="w-100">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 text-center p-2 border border-2">

                                            <div class="pict">

                                                    @if ($user->image)
                                                    <div class="upload">
                                                        <img src="{{ asset('storage/'. $user->image) }}" title="profile"
                                                            width="125" height="125">
                                                    </div>
                                                    @else
                                                    <div class="upload">
                                                        @if (auth()->user()->jenis_kelamin == 'Laki-laki')
                                                        <img src="../assets/img/avatars/avatar.jpg" alt="{{ auth()->user()->nama }}" width="125" height="125"/>
                                                        @else
                                                        <img src="../assets/img/avatars/avatar-5.jpg" alt="{{ auth()->user()->nama }}" width="125" height="125"/>
                                                        @endif
                                                    </div>
                                                    @endif

                                            </div>
                                        </div>
                                        <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
                                        <div class="col-md-7 mt-3">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5><strong>Nama Lengkap</strong></h5>
                                                    <p class="text-muted">{{ $user->nama }}</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>NIK</strong></h5>
                                                    <p class="text-muted">{{ $user->nik }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5><strong>Tempat Lahir</strong></h5>
                                                    <p class="text-muted">{{ $user->tempat_lahir }}</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>Tanggal Lahir</strong></h5>
                                                    <p class="text-muted">{{ \Carbon\Carbon::parse($user->tanggal_lahir)->isoFormat('D MMMM Y') }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5><strong>Alamat</strong></h5>
                                                    <p class="text-muted">{{ $user->alamat }}</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>Jenis Kelamin</strong></h5>
                                                    <p class="text-muted">{{ $user->jenis_kelamin }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5><strong>Agama</strong></h5>
                                                    <p class="text-muted">{{ $user->agama }}</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>Status Perkawinan</strong></h5>
                                                    <p class="text-muted">{{ $user->status_perkawinan }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
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
                                            {{-- <div class="row mt-4">
                                                <div class="col-md-12 ">
                                                    <a href="/editData" class="btn btn-warning w-100">Ubah Data Warga</a>
                                                </div>
                                            </div> --}}
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
