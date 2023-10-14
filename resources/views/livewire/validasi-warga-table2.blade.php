<div>
    <div class="col-xl-12 col-xxl-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-12 table">
                    <div class="container">
                        <div class="card-header my-2">

                            <h5 class="card-title mb-0">Riwayat Validasi Akun</h5>
                        </div>
                        <table class="table table-hover my-0 text-center">
                            @if ($users2->count())
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users2 as $user2)
                                <tr>
                                    <td>{{ $user2->nama }}</td>
                                    <td>{{ $user2->nik }}</td>
                                    <td>
                                        @if ($user2->status == 'Disetujui RT')
                                        <span class="badge bg-info">{{ $user2->status }}</span>
                                        @elseif($user2->status == 'Disetujui Admin')
                                        <span class="badge bg-success">{{ $user2->status }}</span>
                                        @else
                                        <span class="badge bg-danger">{{ $user2->status }}</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                    <hr>
                                    <p class="text-center">Belum Ada Riwayat</p>
                            </tbody>
                            @endif
                        </table>
                        <div class="d-flex justify-content-end mx-2 mt-2">
                            {{ $users2->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
