<div>
    <div class="col-xl-12 col-xxl-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <input type="text" class="form-control w-25" wire:model.live="search" placeholder="Cari warga...">
                        </div>
                        <table class="table table-hover my-0 text-center">
                            @if ($users->count())
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                    <th>Lihat Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->alamat }}</td>
                                    <td>
                                        @if ($user->no_hp)
                                        <a href="https://wa.me/{{ $user->no_hp }}" class="btn btn-success">
                                            <i class="fa-brands fa-whatsapp fa-xl"></i> +{{ $user->no_hp }}
                                        </a>
                                        @else
                                        -
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/lihatDetail/{{ $user->id }}" class="btn btn-primary">
                                            <i class="align-middle fa-solid fa-eye fa-xl text-dark"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <hr>
                                    <p class="text-center">Warga tidak ditemukan</p>
                            </tbody>
                            @endif
                        </table>
                        <div class="d-flex justify-content-end mx-2 mt-2">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
