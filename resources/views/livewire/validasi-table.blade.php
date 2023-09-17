<div>
    <div class="col-xl-12 col-xxl-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Validasi Surat</h5>
                        </div>
                        <table class="table table-hover my-0 text-center">
                            @if ($surats2->count())
                            <thead>
                                <tr>
                                    <th>Keperluan</th>
                                    <th>Jenis Surat</th>
                                    <th>Aksi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($surats2 as $surat)
                                <tr>
                                    <td>{{ $surat->keperluan }}</td>
                                    <td>{{ $surat->jenis_surat }}</td>
                                    <td>
                                        @if ($surat->status == 'Diproses')
                                        <a href="/lihatSurat/{{ $surat->id }}" class="btn btn-primary">
                                            Lihat
                                        </a>
                                        <a href="/setujui/{{ $surat->id }}" class="btn btn-success">
                                            Setujui
                                        </a>
                                        <a href="/tolak/{{ $surat->id }}" class="btn btn-danger">
                                            Tolak
                                        </a>
                                        @elseif($surat->status == 'Disetujui')
                                        <a href="#" class="btn btn-primary">
                                                Lihat
                                        </a>
                                        @elseif($surat->status == 'Ditolak')
                                        <span class="badge bg-secondary">Tidak dapat dilakukan</span>
                                        @endif

                                    </td>
                                    <td>
                                        @if ($surat->status == 'Diproses')
                                        <span class="badge bg-secondary">{{ $surat->status }}</span>
                                        @elseif ($surat->status == 'Disetujui')
                                        <span class="badge bg-primary">{{ $surat->status }}</span>
                                        @elseif ($surat->status == 'Ditolak')
                                        <span class="badge bg-danger">{{ $surat->status }}</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                    <p class="text-center">Belum Ada Surat</p>
                            </tbody>
                            @endif
                        </table>
                        <div class="d-flex justify-content-end mx-2 mt-2">
                            {{ $surats2->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
