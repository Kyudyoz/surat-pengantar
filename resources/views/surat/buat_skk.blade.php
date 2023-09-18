@extends('layouts.main')
@section('main')
<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-8 col-xl-8 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Surat Keterangan Kematian</h1>
                        <p class="lead">
                            Masukkan data yang diperlukan
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
                                        <form action="/suratStore" method="post">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            <input type="hidden" name="jenis_surat" value="Surat Keterangan Kematian">
                                            <div class="mb-3">
                                                <label class="form-label">NIK beliau</label>
                                                <input class="form-control form-control-lg @error('nik') is-invalid @enderror" required type="text" name="nik" placeholder="Masukan NIK Beliau" />
                                                @error('nik')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Keperluan</label>
                                                <input class="form-control form-control-lg @error('keperluan') is-invalid @enderror" required type="text" name="keperluan" placeholder="Masukan keperluan" />
                                                @error('keperluan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal kematian</label>
                                                <input class="form-control form-control-lg @error('tanggal_kematian') is-invalid @enderror" required type="date" name="tanggal_kematian" placeholder="mm/dd/yy" />
                                                @error('tanggal_kematian')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Jam kematian</label>
                                                <input class="form-control form-control-lg @error('jam_kematian') is-invalid @enderror" required type="time" name="jam_kematian"/>
                                                @error('jam_kematian')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tempat kematian</label>
                                                <input class="form-control form-control-lg @error('tempat_kematian') is-invalid @enderror" required type="text" name="tempat_kematian" placeholder="Masukan tempat kematian" />
                                                @error('tempat_kematian')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Penyebab kematian</label>
                                                <input class="form-control form-control-lg @error('penyebab_kematian') is-invalid @enderror" required type="text" name="penyebab_kematian" placeholder="Masukan penyebab kematian" />
                                                @error('penyebab_kematian')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tempat dimakamkan</label>
                                                <input class="form-control form-control-lg @error('tempat_dimakamkan') is-invalid @enderror" required type="text" name="tempat_dimakamkan" placeholder="Masukan tempat dimakamkan" />
                                                @error('tempat_dimakamkan')
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
