@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Unggah Tanda Tangan</h1>

        <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <div class="card">
                            <h4 class="m-3 text-center">Langkah-langkah unggah tanda tangan</h4>
                            <hr>
                            <div class="card-body">
                                <ol>
                                    <li>Tulis tanda tangan di kertas putih polos</li>
                                    <li>Foto tanda tangan yang sudah dibuat</li>
                                    <li>Hilangkan background putih disini <a href="https://www.remove.bg/">https://www.remove.bg/</a></li>
                                    <li>Jika sudah, silahkan unggah tanda tangan anda</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    @foreach ($rts as $rt)
                    <div class="col-sm-8">
                        <div class="card">
                        <form action="/updateTtd/{{ $rt->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if ($rt->ttd)
                            <div class="upload text-center">
                                <img src="{{ asset('storage/'. $rt->ttd) }}" class="img-preview2 img-fluid my-3 mx-3 col-sm-4" height="20%">
                                <input type="hidden" name="id" value="{{ $rt->id }}">
                                <input type="hidden" name="oldImage" value="{{ $rt->ttd }}">
                                <div class="round">
                                    <label for="image" class="ttd d-block btn btn-outline-primary w-50 my-4" style="margin-left: 25%">Pilih Gambar</label>
                                    <input type="file" accept="image/png" class="d-none" name="ttd" id="image" onchange="previewImage()">
                                </div>
                                @error('ttd')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            @else
                            <div class="upload text-center">
                                <img class="img-preview2 img-fluid my-3 mx-3 col-sm-4" height="20%"/>
                                <input type="hidden" name="id" value="{{ $rt->id }}">
                                <div class="round">
                                    <label for="image" class="ttd d-block btn btn-outline-primary w-50 my-4" style="margin-left: 25%">Pilih Gambar</label>
                                    <input type="file" accept="image/png" class="d-none" name="ttd" id="image" onchange="previewImage()">
                                </div>
                                @error('ttd')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            @endif
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-3 mx-3 w-50">Simpan!</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@include('sweetalert::alert')
@endsection
