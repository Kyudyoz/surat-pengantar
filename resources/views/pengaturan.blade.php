@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Pengaturan Akun</h1>

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
                                                            <input type="file" accept="image/*" name="image" id="imageProfil">
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
                                                            <input type="file" accept="image/*" name="image" id="imageProfil">
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
                                            <form action="/updateNoHp/{{ $user->id }}" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5><strong>Nama Lengkap</strong></h5>
                                                    <div class="mb-3">
                                                        <input class="form-control form-control-lg @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" placeholder="Masukan Nama" value="{{ old('nama', $user->nama) }}" readonly disabled/>
                                                        @error('nama')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>NIK</strong></h5>
                                                    <div class="mb-3">
                                                        <input class="form-control form-control-lg @error('nik') is-invalid @enderror" type="text" name="nik" id="nik" placeholder="Masukan NIK" value="{{ old('nik', $user->nik) }}" readonly disabled/>
                                                        @error('nik')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5><strong>Tempat Lahir</strong></h5>
                                                    <div class="mb-3">
                                                        <input class="form-control form-control-lg @error('tempat_lahir') is-invalid @enderror" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Masukan Tempat Lahir" value="{{ old('tempat_lahir', $user->tempat_lahir) }}" readonly disabled/>
                                                        @error('tempat_lahir')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>Tanggal Lahir</strong></h5>
                                                    <div class="mb-3">
                                                        <input class="form-control form-control-lg @error('tanggal_lahir') is-invalid @enderror" type="text" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir', \Carbon\Carbon::parse($user->tanggal_lahir)->isoFormat('D MMMM Y')) }}" readonly disabled/>
                                                        @error('tanggal_lahir')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5><strong>Alamat</strong></h5>
                                                    <div class="mb-3">
                                                        <input class="form-control form-control-lg @error('alamat') is-invalid @enderror" type="text" name="alamat" id="alamat" placeholder="Masukan Alamat" value="{{ old('alamat', $user->alamat) }}"/>
                                                        @error('alamat')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>Jenis Kelamin</strong></h5>
                                                    <div class="mb-3">
                                                        <input class="form-control form-control-lg @error('jenis_kelamin') is-invalid @enderror" type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="Masukan Jenis Kelamin" value="{{ old('jenis_kelamin', $user->jenis_kelamin) }}" readonly disabled/>
                                                        @error('jenis_kelamin')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5><strong>Agama</strong></h5>
                                                    <div class="mb-3">
                                                        <select name="agama" id="agama" class="form-select form-select-md @error('agama') is-invalid @enderror" required>
                                                            <option value="" hidden>Agama</option>
                                                            <option value="Islam" {{ old('agama', $user->agama) == 'Islam' ? 'selected' : '' }}>Islam</option>
                                                            <option value="Kristen Katolik" {{ old('agama', $user->agama) == 'Kristen Katolik' ? 'selected' : '' }}>Kristen Katolik</option>
                                                            <option value="Kristen Protestan" {{ old('agama', $user->agama) == 'Kristen Protestan' ? 'selected' : '' }}>Kristen Protestan</option>
                                                            <option value="Hindu" {{ old('agama', $user->agama) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                                            <option value="Buddha" {{ old('agama', $user->agama) == 'Budha' ? 'selected' : '' }}>Budha</option>
                                                            <option value="Konghucu" {{ old('agama', $user->agama) == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                                        </select>
                                                        @error('agama')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>Status Perkawinan</strong></h5>
                                                    <div class="mb-3">
                                                        <select name="status_perkawinan" id="status_perkawinan" class="form-select form-select-md @error('status_perkawinan') is-invalid @enderror" required>
                                                            <option value="" hidden>Status Perkawinan</option>
                                                            <option value="Belum Kawin" {{ old('status_perkawinan', $user->status_perkawinan) == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                                                            <option value="Kawin" {{ old('status_perkawinan', $user->status_perkawinan) == 'Kawin' ? 'selected' : '' }}>Kawin</option>
                                                        </select>
                                                        @error('status_perkawinan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5><strong>Pekerjaan</strong></h5>
                                                    <div class="mb-3">
                                                        <input class="form-control form-control-lg @error('pekerjaan') is-invalid @enderror" type="text" name="pekerjaan" id="pekerjaan" placeholder="Masukan Pekerjaan" value="{{ old('pekerjaan', $user->pekerjaan) }}"/>
                                                        @error('pekerjaan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>No. Handphone</strong></h5>
                                                        <div class="mb-3">
                                                            <input class="form-control form-control-lg @error('no_hp') is-invalid @enderror" type="text" name="no_hp" id="no_hp" placeholder="Masukan No. Handphone" value="{{ old('no_hp', $user->no_hp) }}"/>
                                                            @error('no_hp')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-grid gap-2 mt-3">
                                                    <button type="submit" class="btn btn-lg btn-primary">Simpan!</button>
                                                </div>
                                            </form>
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
