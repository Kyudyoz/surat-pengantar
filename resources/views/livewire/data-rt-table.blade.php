<div>
    <div class="col-xl-12 col-xxl-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-12 table">
                    <div class="container">
                        <div class="card-header my-2">
                            <input type="text" class="form-control w-25" wire:model.live="search" placeholder="Cari RT...">
                        </div>
                        <table class="table table-hover my-0 text-center">
                            @if ($rts->count())
                            <thead>
                                <tr>
                                    <th>RT</th>
                                    <th>Nama Ketua RT</th>
                                    <th>Lihat Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rts as $rt)
                                <tr>
                                    <td>{{ $rt->nama_rt }}</td>
                                    @if ($rt->nama_ketua)
                                    <td>{{ $rt->nama_ketua }}</td>
                                    <td>
                                        <a href="/lihatDetailRt/{{ Crypt::encrypt($rt->id) }}" class="btn btn-primary">
                                            <i class="fa-solid fa-pen-to-square fa-lg"></i>
                                        </a>
                                    </td>
                                    @else
                                    <td>
                                        <a href="/tambahUser/{{ Crypt::encrypt($rt->id) }}" class="btn btn-primary">
                                        <i class="fa-solid fa-plus fa-lg"></i>
                                        </a>
                                    </td>
                                    @endif

                                </tr>
                                @endforeach
                                @else
                                <hr>
                                    <p class="text-center">RT tidak ditemukan</p>
                            </tbody>
                            @endif
                        </table>
                        <div class="d-flex justify-content-end mx-2 mt-2">
                            {{ $rts->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
