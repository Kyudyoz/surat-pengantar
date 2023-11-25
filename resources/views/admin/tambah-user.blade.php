@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Tambah User</h1>

        <div class="row">
            <div class="col-xl-10 col-xxl-10 d-flex">
                <div class="w-100">
                    <div class="row justify-content-center">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 mt-3">
                                            <form action="/storeUser" method="post">
                                                @csrf
                                                <input type="hidden" name="role" value="Ketua">
                                                <input type="hidden" name="status" value="Disetujui">
                                            <div class="row">
                                                <div class="col-sm-6">
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
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5><strong>RT</strong></h5>
                                                    <div class="mb-3">
                                                        <select name="rt_id" id="rt_id" class="form-select form-select-md @error('rt_id') is-invalid @enderror" required readonly>
                                                            <option value="{{ $rt->id }}">{{ $rt->nama_rt }}</option>
                                                        </select>
                                                        @error('rt_id')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>Password</strong></h5>
                                                        <div class="mb-3">
                                                            <div class="input-group">
                                                                <input class="form-control pw form-control-lg @error('password') is-invalid @enderror" type="password" name="password" placeholder="Masukan password"/>
                                                                <button class="btn btn-outline-secondary toggle-pw" type="button" id="button-addon2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                                                                </button>
                                                            </div>
                                                            @error('password')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-grid gap-2 mt-3">
                                                    <button type="submit" class="btn btn-lg btn-primary">Tambah User!</button>
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
