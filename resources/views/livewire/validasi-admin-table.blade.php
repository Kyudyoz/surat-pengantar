<div>
    <div class="col-xl-12 col-xxl-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-12 table">
                    <div class="container">
                        <div class="card-header my-2">

                            <h5 class="card-title mb-0">Validasi Akun</h5>
                        </div>
                        <table class="table table-hover my-0 text-center">
                            @if ($users->count())
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Aksi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->nik }}</td>
                                    <td>
                                        
                                        <a href="/detailValidasi/{{ Crypt::encrypt($user->id) }}" class="btn btn-primary">
                                            Lihat
                                        </a>
                            
                                        <a href="/setujuiAkunAdmin/{{ Crypt::encrypt($user->id) }}" class="btn btn-success">
                                            Setujui
                                        </a>
                                        <a href="/tolakAkunAdmin/{{ Crypt::encrypt($user->id) }}" class="btn btn-danger">
                                            Tolak
                                        </a>
                                    </td>
                                    <td>
                                        <span class="badge bg-info">{{ $user->status }}</span>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                    <hr>
                                    <p class="text-center">Belum Ada Pengajuan Akun</p>
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
