<div>
    <div class="col-xl-12 col-xxl-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-12 table">
                    <div class="container">
                        <div class="card-header my-2">

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
                                        @if ($surat->jenis_surat == 'Surat Keterangan Tidak Mampu')
                                        <a href="/lihatSKTM/{{ Crypt::encrypt($surat->id) }}" class="btn btn-primary">
                                            Lihat
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Usaha')
                                        <a href="/lihatSKU/{{ Crypt::encrypt($surat->id) }}" class="btn btn-primary">
                                            Lihat
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Domisili')
                                        <a href="/lihatSKD/{{ Crypt::encrypt($surat->id) }}" class="btn btn-primary">
                                            Lihat
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Kematian')
                                        <a href="/lihatSKK/{{ Crypt::encrypt($surat->id) }}" class="btn btn-primary">
                                            Lihat
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Kepemilikan Rumah')
                                        <a href="/lihatSKKR/{{ Crypt::encrypt($surat->id) }}" class="btn btn-primary">
                                            Lihat
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Janda' || $surat->jenis_surat == 'Surat Keterangan Duda')
                                        <a href="/lihatSKJ/{{ Crypt::encrypt($surat->id) }}" class="btn btn-primary">
                                            Lihat
                                        </a>
                                        @endif
                                        <a href="/setujui/{{ Crypt::encrypt($surat->id) }}" class="btn btn-success">
                                            Setujui
                                        </a>
                                        <a href="/tolak/{{ Crypt::encrypt($surat->id) }}" class="btn btn-danger">
                                            Tolak
                                        </a>
                                        @elseif($surat->status == 'Disetujui')
                                        @if ($surat->jenis_surat == 'Surat Keterangan Tidak Mampu')
                                        <a href="/lihatSKTM/{{ Crypt::encrypt($surat->id) }}" class="btn btn-primary">
                                            Lihat
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Usaha')
                                        <a href="/lihatSKU/{{ Crypt::encrypt($surat->id) }}" class="btn btn-primary">
                                            Lihat
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Domisili')
                                        <a href="/lihatSKD/{{ Crypt::encrypt($surat->id) }}" class="btn btn-primary">
                                            Lihat
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Kematian')
                                        <a href="/lihatSKK/{{ Crypt::encrypt($surat->id) }}" class="btn btn-primary">
                                            Lihat
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Kepemilikan Rumah')
                                        <a href="/lihatSKKR/{{ Crypt::encrypt($surat->id) }}" class="btn btn-primary">
                                            Lihat
                                        </a>
                                        @elseif ($surat->jenis_surat == 'Surat Keterangan Janda' || $surat->jenis_surat == 'Surat Keterangan Duda')
                                        <a href="/lihatSKJ/{{ Crypt::encrypt($surat->id) }}" class="btn btn-primary">
                                            Lihat
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
                                <hr>
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
