@extends('layouts.main')
@section('main')
<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-8 col-xl-8 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Surat Keterangan Janda</h1>
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
                                            <input type="hidden" name="jenis_surat" value="Surat Keterangan Janda">
                                            <div class="mb-3">
                                                <label class="form-label">Keperluan</label>
                                                <input class="form-control form-control-lg @error('keperluan') is-invalid @enderror" type="text" name="keperluan" placeholder="Masukan Keperluan" />
                                                @error('keperluan')
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
