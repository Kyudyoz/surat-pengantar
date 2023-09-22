@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Bulian News</h1>

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

                        <div class="w-100">
                            <a href="/posts/show/{{ $post->slug }}" class="btn btn-secondary w-100">Baca
                                selengkapnya</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</main>
@endsection
