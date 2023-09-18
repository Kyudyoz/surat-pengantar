@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Profil</h1>

        <div class="row">
            <div class="col-xl-10 col-xxl-10 d-flex">
                <div class="w-100">
                    <div class="row">
                        @foreach ($users as $user)

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 text-center p-2 border border-2">

                                            <div class="pict">
                                                <form action="/userProfile/update" id="form" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    @if ($user->image)
                                                    <div class="upload">
                                                        <img src="{{ asset('storage/'. $user->image) }}" title="profile"
                                                            width="125" height="125">
                                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                                        <input type="hidden" name="nama" value="{{ $user->nama }}">
                                                        <input type="hidden" name="oldImage" value="{{ $user->image }}">
                                                        <div class="round">
                                                            <input type="file" name="image" id="image">
                                                            <i class="fa-solid fa-camera fa-xl" style="color: white"></i>
                                                        </div>
                                                        @error('image')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    @else
                                                    <div class="upload">
                                                        @if (auth()->user()->jenis_kelamin == 'Laki-laki')
                                                        <img src="../assets/img/avatars/avatar.jpg" alt="{{ auth()->user()->nama }}" width="125" height="125"/>
                                                        @else
                                                        <img src="../assets/img/avatars/avatar-5.jpg" alt="{{ auth()->user()->nama }}" width="125" height="125"/>
                                                        @endif
                                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                                        <input type="hidden" name="nama" value="{{ $user->nama }}">
                                                        <div class="round">
                                                            <input type="file" name="image" id="image">
                                                            <i class="fa-solid fa-camera fa-xl" style="color: white"></i>
                                                        </div>
                                                        @error('image')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    @endif
                                                </form>
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

                                                    <form action="/updateNoHp/{{ $user->id }}" method="post">

                                                        @csrf
                                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                                        <div class="mb-3">
                                                            <input class="form-control form-control-lg @error('no_hp') is-invalid @enderror" type="text" name="no_hp" id="no_hp" placeholder="Masukan No. Handphone" value="{{ old('no_hp', $user->no_hp) }}"/>
                                                            @error('no_hp')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="d-grid gap-2 mt-3">
                                                            <button type="submit" class="btn btn-lg btn-primary">Simpan!</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12 ">
                                                    <a href="/editPass" class="btn btn-warning w-100">Ubah Password</a>
                                                </div>
                                            </div>
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
