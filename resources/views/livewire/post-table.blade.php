<div>


            <div class="row">
                <div class="col-xl-12 col-xxl-12 d-flex ">
                    <div class="w-100">
                        <div class="container1 ">

                            <a href="/create" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"
                                    style="color: #ffffff;"></i> Buat Postingan</a>
                            @if($posts->count() > 0)
                                <div class="row mt-2">
                                    @foreach($posts as $post)
                                        <div class="col-md-6 mb-2">
                                            <a class="nav-link" href="/posts/show/{{ $post->id }}">
                                                <div class="card item" style="overflow:hidden;">
                                                    <img src="{{ URL::asset('assets/img/avatars/rt.jpg') }}" class="card-img-top" alt=""
                                                    style="min-height: 300px;max-height:300px;min-width: 100%">
                                                    <div class="card-body">
                                                        <h2 class="card-title">{{ $post->judul }}</h2>
                                                        <small class="card-text text-muted">
                                                            {{ $post->created_at->diffForHumans() }}
                                                        </small>
                                                        <hr />
                                                        <p class="card-text" style="min-height: 100px;max-height:100px; overflow:hidden;display: -webkit-box;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical; text-overflow:ellipsis; ">{{ strip_tags($post->body) }}</p>

                                                        <div class="w-100">
                                                            <a href="#" class="btn btn-secondary w-100">Baca selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="text-center mt-2 mb-4 fs-4 text-dark">Tidak ada postingan</p>
                            @endif
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
        </div>

</div>
