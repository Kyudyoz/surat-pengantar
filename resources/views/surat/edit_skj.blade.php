@extends('layouts.main')
@section('main')
<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-8 col-xl-8 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        @if (auth()->user()->jenis_kelamin == 'Laki-laki')
                        <h1 class="h2">Surat Keterangan Duda</h1>
                        @else
                        <h1 class="h2">Surat Keterangan Janda</h1>
                        @endif
                        <p class="lead">
                            Edit data yang diperlukan
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-sm-5 col-md-6 col-lg-5 col-xl-3 mx-auto border-end border-5">
                                        <img src="{{ URL::asset('/assets/img/icons/logo2.png') }}" alt="logo" style="max-width: 150px">
                                </div>
                                <div class="col-sm-7 col-md-6 col-lg-7 col-xl-9 mx-auto">
                                    <div class="m-sm-8">
                                        <form action="/updateSKJ/{{ $surat->id }}" method="post">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            @if (auth()->user()->jenis_kelamin == 'Laki-laki')
                                            <input type="hidden" name="jenis_surat" value="Surat Keterangan Duda">
                                            @else
                                            <input type="hidden" name="jenis_surat" value="Surat Keterangan Janda">
                                            @endif
                                            <div class="mb-3">
                                                <label class="form-label">Keperluan</label>
                                                <input class="form-control form-control-lg @error('keperluan') is-invalid @enderror" type="text" name="keperluan" placeholder="Masukan Keperluan" value="{{ old('keperluan', $surat->keperluan) }}"/>
                                                @error('keperluan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                @if (auth()->user()->jenis_kelamin == 'Laki-laki')
                                                <label class="form-label">Nama Istri</label>
                                                <input class="form-control form-control-lg @error('nama_pasangan') is-invalid @enderror" type="text" name="nama_pasangan" placeholder="Masukan nama istri" required value="{{ old('nama_pasangan', $surat->nama_pasangan) }}"/>
                                                @else
                                                <label class="form-label">Nama Suami</label>
                                                <input class="form-control form-control-lg @error('nama_pasangan') is-invalid @enderror" type="text" name="nama_pasangan" placeholder="Masukan nama suami" required value="{{ old('nama_pasangan', $surat->nama_pasangan) }}"/>
                                                @endif

                                                @error('nama_pasangan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Jenis Cerai</label>
                                                <select name="jenis_cerai" id="jenis_cerai" class="form-select form-select-md @error('jenis_cerai') is-invalid @enderror" required>
                                                    <option value="" hidden>Jenis Cerai</option>
                                                    <option value="Cerai Mati" {{ old('jenis_cerai', $surat->jenis_cerai) == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                                                    <option value="Cerai Hidup" {{ old('jenis_cerai', $surat->jenis_cerai) == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                                                </select>
                                                @error('jenis_cerai')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="d-grid gap-2 mt-3">
                                                <button type="submit" class="btn btn-lg btn-primary">Ajukan Surat!</button>
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
</main>
@endsection
