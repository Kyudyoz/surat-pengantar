@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <div class="row justify-content-center mt-2">

            <div class="col-md-8 mb-2">

                <div class="card item" style="overflow:hidden;">
                    @if ($post->image)
                    <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top" alt=""
                        style="min-height: 300px;max-height:300px;min-width: 100%">
                    @else
                    <img src="{{ asset('/assets/img/icons/no_image.png') }}" class="card-img-top" alt=""
                        style="min-height: 300px;max-height:300px;min-width: 100%">

                    @endif
                    <div class="card-body">
                        <h2 class="card-title text-dark">{{ Str::ucfirst($post->judul) }}</h2>
                        <small class="card-text text-muted">
                            Dari : {{ $post->user->rt->nama_rt }}
                        </small>
                        <br>
                        <small class="card-text text-muted">
                            {{ $post->created_at->diffForHumans() }}
                        </small>
                        <hr />
                        <p class="card-text">{!! $post->body !!}</p>
                        @auth
                            @if (auth()->user()->role == "Ketua" || auth()->user()->role == "admin")
                            <div class="w-100 text-end">
                                <a href="/posts/edit/{{ $post->slug }}" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger deletePost" data-id="{{ $post->slug }}">
                                    Hapus
                                </a>
                            </div>
                            @endif
                        @endauth

                    </div>
                </div>

            </div>

        </div>
    </div>
</main>
@endsection
