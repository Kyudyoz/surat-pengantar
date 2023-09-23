@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Tambah Warga</h1>

        <div class="row">
            <div class="col-xl-10 col-xxl-10 d-flex">
                <div class="w-100">
                    <div class="row justify-content-center">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 mt-3">
                                            <form action="/storeWarga" method="post">
                                                @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="hidden" name="rt_id" value="{{ auth()->user()->rt_id }}">
                                                    <input type="hidden" name="role" value="Warga">
                                                    <h5><strong>Nama Lengkap</strong></h5>
                                                    <div class="mb-3">
                                                        <input class="form-control form-control-lg @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" placeholder="Masukan Nama" value="{{ old('nama') }}"/>
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
                                                        <input class="form-control form-control-lg @error('nik') is-invalid @enderror" type="text" name="nik" id="nik" placeholder="Masukan NIK" value="{{ old('nik') }}"/>
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
                                                        <input class="form-control form-control-lg @error('tempat_lahir') is-invalid @enderror" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Masukan Tempat Lahir" value="{{ old('tempat_lahir') }}"/>
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
                                                        <input class="form-control form-control-lg @error('tanggal_lahir') is-invalid @enderror" type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}"/>
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
                                                        <input class="form-control form-control-lg @error('alamat') is-invalid @enderror" type="text" name="alamat" id="alamat" placeholder="Masukan Alamat" value="{{ old('alamat') }}"/>
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
                                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-select form-select-md @error('jenis_kelamin') is-invalid @enderror" required>
                                                            <option value="" hidden>Jenis Kelamin</option>
                                                            <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                            <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                        </select>
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
                                                            <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                                            <option value="Kristen Katolik" {{ old('agama') == 'Kristen Katolik' ? 'selected' : '' }}>Kristen Katolik</option>
                                                            <option value="Kristen Protestan" {{ old('agama') == 'Kristen Protestan' ? 'selected' : '' }}>Kristen Protestan</option>
                                                            <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                                            <option value="Buddha" {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha</option>
                                                            <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
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
                                                            <option value="Belum Kawin" {{ old('status_perkawinan') == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                                                            <option value="Kawin" {{ old('status_perkawinan') == 'Kawin' ? 'selected' : '' }}>Kawin</option>
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
                                                        <input class="form-control form-control-lg @error('pekerjaan') is-invalid @enderror" type="text" name="pekerjaan" id="pekerjaan" placeholder="Masukan Pekerjaan" value="{{ old('pekerjaan') }}"/>
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
                                                            <input class="form-control form-control-lg @error('no_hp') is-invalid @enderror" type="text" name="no_hp" id="no_hp" placeholder="Masukan No. Handphone" value="{{ old('no_hp') }}"/>
                                                            @error('no_hp')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-grid gap-2 mt-3">
                                                    <button type="submit" class="btn btn-lg btn-primary">Tambah Warga!</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection
