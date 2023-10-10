<div>
    <div class="col-xl-12 col-xxl-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-12 table">
                    <div class="container">
                        <div class="card-header my-2">

                            <h5 class="card-title mb-0">Surat Saya</h5>
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
                                        @if ($surat->jenis_surat == 'Surat Pengantar Keterangan Tidak Mampu')
                                        <a href="/lihatSKTM/{{ Crypt::encrypt($surat->id) }}" class="btn btn-success">
                                            Lihat
                                        </a>
                                        <a href="/editSKTM/{{ Crypt::encrypt($surat->id) }}" class="btn btn-warning">
                                            Edit
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Usaha')
                                        <a href="/lihatSKU/{{ Crypt::encrypt($surat->id) }}" class="btn btn-success">
                                            Lihat
                                        </a>
                                        <a href="/editSKU/{{ Crypt::encrypt($surat->id) }}" class="btn btn-warning">
                                            Edit
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Domisili')
                                        <a href="/lihatSKD/{{ Crypt::encrypt($surat->id) }}" class="btn btn-success">
                                            Lihat
                                        </a>
                                        <a href="/editSKD/{{ Crypt::encrypt($surat->id) }}" class="btn btn-warning">
                                            Edit
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Kematian')
                                        <a href="/lihatSKK/{{ Crypt::encrypt($surat->id) }}" class="btn btn-success">
                                            Lihat
                                        </a>
                                        <a href="/editSKK/{{ Crypt::encrypt($surat->id) }}" class="btn btn-warning">
                                            Edit
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Kepemilikan Rumah')
                                        <a href="/lihatSKKR/{{ Crypt::encrypt($surat->id) }}" class="btn btn-success">
                                            Lihat
                                        </a>
                                        <a href="/editSKKR/{{ Crypt::encrypt($surat->id) }}" class="btn btn-warning">
                                            Edit
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Janda' || $surat->jenis_surat == 'Surat Keterangan Duda')
                                        <a href="/lihatSKJ/{{ Crypt::encrypt($surat->id) }}" class="btn btn-success">
                                            Lihat
                                        </a>
                                        <a href="/editSKJ/{{ Crypt::encrypt($surat->id) }}" class="btn btn-warning">
                                            Edit
                                        </a>
                                        @endif
                                        <a href="#" class="btn btn-danger delete" data-id="{{ Crypt::encrypt($surat->id) }}">
                                            Hapus
                                        </a>

                                        @elseif($surat->status == 'Disetujui')
                                        @if ($surat->jenis_surat == 'Surat Keterangan Tidak Mampu')
                                        <a href="/lihatSKTM/{{ Crypt::encrypt($surat->id) }}" class="btn btn-success">
                                            <strong>
                                                Cetak <i class="fa-solid fa-print fa-lg"></i>
                                            </strong>
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Usaha')
                                        <a href="/lihatSKU/{{ Crypt::encrypt($surat->id) }}" class="btn btn-success">
                                            <strong>
                                                Cetak <i class="fa-solid fa-print fa-lg"></i>
                                            </strong>
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Domisili')
                                        <a href="/lihatSKD/{{ Crypt::encrypt($surat->id) }}" class="btn btn-success">
                                            <strong>
                                                Cetak <i class="fa-solid fa-print fa-lg"></i>
                                            </strong>
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Kematian')
                                        <a href="/lihatSKK/{{ Crypt::encrypt($surat->id) }}" class="btn btn-success">
                                            <strong>
                                                Cetak <i class="fa-solid fa-print fa-lg"></i>
                                            </strong>
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Kepemilikan Rumah')
                                        <a href="/lihatSKKR/{{ Crypt::encrypt($surat->id) }}" class="btn btn-success">
                                            <strong>
                                                Cetak <i class="fa-solid fa-print fa-lg"></i>
                                            </strong>
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Janda' || $surat->jenis_surat == 'Surat Keterangan Duda')
                                        <a href="/lihatSKJ/{{ Crypt::encrypt($surat->id) }}" class="btn btn-success">
                                            <strong>
                                                Cetak <i class="fa-solid fa-print fa-lg"></i>
                                            </strong>
                                        </a>
                                        @endif
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
                                    <p class="text-center">Belum Ada Surat yang Dibuat</p>
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
