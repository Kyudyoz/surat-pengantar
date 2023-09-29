@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3 text-center"><strong>Buat Postingan</h1>

        <div class="row justify-content-center">
            <div class="col-xl-6 col-xxl-6 d-flex">
                <form action="/posts/update/{{ $post->slug }}" method="post" class="mb-5" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">

                      <label for="judul" class="form-label">Judul Postingan</label>
                      <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $post->judul) }}">
                      @error('judul')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <input type="hidden" class="form-control" id="slug" name="slug" readonly value="{{ old('slug', $post->slug) }}">
                    </div>

                    <div class="mb-3">
                      <label for="image" class="form-label">Gambar</label>
                      <input type="hidden" name="oldImage" value="{{ $post->image }}">
                      @if ($post->image)
                      <img src="{{ URL::asset('storage/'. $post->image) }}" class="img-preview img-fluid mb-3 col-sm-8 d-block">
                      @else
                      <img class="img-preview img-fluid mb-3 col-sm-8 d-block">
                      @endif
                      <input class="form-control @error('image') is-invalid @enderror" accept="image/*" type="file" id="image" name="image" onchange="previewImage()">
                      @error('image')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="body" class="form-label">Isi Postingan</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                        <trix-editor input="body"></trix-editor>
                        @error('body')
                          <p class="text-danger">
                            {{ $message }}
                          </p>
                      @enderror

                    </div>

                    <button type="submit" class="btn btn-primary mb-3">Ubah Postingan</button>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
