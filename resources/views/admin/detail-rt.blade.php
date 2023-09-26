@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Detail RT</h1>

        <div class="row">
            <div class="col-xl-10 col-xxl-10 d-flex">
                <div class="w-100">
                    <div class="row">
                        @foreach ($rts as $rt)

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 mt-3">
                                            <form action="/updateRt/{{ $rt->id }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $rt->id }}">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5><strong>Nama Lengkap</strong></h5>
                                                    <div class="mb-3">
                                                        <select name="nama_ketua" id="nama_ketua" class="select2 form-select form-select-md @error('nama_ketua') is-invalid @enderror" required>
                                                            <option value="{{ old('nama_ketua', $rt->nama_ketua) }}">{{ $rt->nama_ketua }}</option>
                                                            @foreach ($users as $user)
                                                            <option value="{{ $user->nama }}">{{ $user->nama }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('nama_ketua')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>RT</strong></h5>
                                                    <div class="mb-3">
                                                        <input class="form-control form-control-lg @error('nama_rt') is-invalid @enderror" type="text" name="nama_rt" id="nama_rt" placeholder="Masukan nama_rt" value="{{ old('nama_rt', $rt->nama_rt) }}" readonly disabled/>
                                                        @error('nama_rt')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="d-grid gap-2 mt-3">
                                                    <button type="submit" class="btn btn-lg btn-primary">Ubah Ketua RT!</button>
                                                </div>
                                            </form>
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
