@extends('layouts.main')
@section('main')
<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-8 col-xl-8 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Surat Keterangan Tidak Mampu</h1>
                        <p class="lead">
                            Edit data yang diperlukan
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-8">
                                <form action="/editSurat/{{ $surat->id }}/update" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="jenis_surat" value="Surat Keterangan Tidak Mampu">
                                    <div class="mb-3">
                                        <label class="form-label">Keperluan</label>
                                        <input class="form-control form-control-lg @error('keperluan') is-invalid @enderror" type="text" name="keperluan" placeholder="Masukan Keperluan" value="{{ old('keperluan', $surat->keperluan) }}"/>
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
</main>
@endsection
