@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Tambah RT</h1>

        <div class="row">
            <div class="col-xl-10 col-xxl-10 d-flex">
                <div class="w-100">
                    <div class="row justify-content-center">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 mt-3">
                                            <form action="/storeRt" method="post">
                                                @csrf
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <h5><strong>Nama RT</strong></h5>
                                                    <div class="mb-3">
                                                        <input class="form-control form-control-lg @error('nama_rt') is-invalid @enderror" type="text" name="nama_rt" id="nama_rt" placeholder="Contoh : RT 01" value="{{ old('nama_rt') }}"/>
                                                        @error('nama_rt')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mt-3">
                                                    <div class="d-grid gap-2 mt-2">
                                                        <button type="submit" class="btn btn-lg btn-primary">Tambah RT!</button>
                                                    </div>
                                                </div>
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
