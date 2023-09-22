<div>
            <div class="row">
                <div class="col-xl-12 col-xxl-12 d-flex ">
                    <div class="w-100">
                        <div class="container1 ">
                            @auth
                            @if (auth()->user()->role == 'Ketua' || auth()->user()->role == 'Admin')
                            <a href="/buat" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"
                                    style="color: #ffffff;"></i> Buat Postingan</a>
                            @endif
                            @endauth
                            <input type="text" class="form-control w-75" wire:model.live="search" placeholder="Cari Judul Postingan...">
                            @if($posts->count() > 0)
                                <div class="row mt-2">
                                    @foreach($posts as $post)
                                        <div class="col-md-6 mb-2">

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
                                                        <p class="card-text" style="min-height: 50px;max-height:50px; overflow:hidden;display: -webkit-box;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical; text-overflow:ellipsis; ">{{ strip_tags($post->body) }}</p>

                                                        <div class="w-100">
                                                            <a href="/posts/show/{{ $post->id }}" class="btn btn-secondary w-100">Baca selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                    @endforeach
                                </div>
                            @else
                            <hr>
                                <p class="text-center mt-2 mb-4 fs-4 text-dark">Postingan tidak ditemukan</p>
                            @endif
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
        </div>

</div>
