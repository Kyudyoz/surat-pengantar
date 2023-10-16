@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Buat Surat</h1>

        <div class="row">
            <div class="col-sm-5 col-md-6 col-lg-4 col-xl-3 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-sm-5 col-md-8 col-lg-4 col-xl-10 text-center">
                                        <img src="{{ URL::asset('/assets/img/surat/sktm.png') }}" alt="logo" style="width: 100%;" >
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-md-6 col-lg-8 col-xl-9 mx-auto">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-9">
                        <div class="card-body">
                          <h5 class="card-title badge text-white" style="background-color:#BB1C1C;">Surat Pengantar Keterangan Tidak Mampu</h5>
                          <p class="card-text">Surat Keterangan Tidak Mampu adalah dokumen resmi yang membuktikan bahwa seseorang atau keluarganya tidak memiliki kemampuan finansial untuk memenuhi kebutuhan dasar mereka. Ini digunakan untuk mengajukan bantuan sosial atau keringanan biaya.</p>
                        </div>
                      </div>
                      <div class="col-md-3 d-flex justify-content-center align-items-center ">
                        <a href="/buatSKTM">
                            <button type="button" class="btn my-2 mx-2 w-100 text-white" style="background-color:#222E3B;">Ajukan</button>
                        </a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-md-6 col-lg-4 col-xl-3 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-sm-5 col-md-8 col-lg-4 col-xl-10 mx-auto text-center">
                                        <img src="{{ URL::asset('/assets/img/surat/skkr.png') }}" alt="logo" style="width: 100%" >
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-md-6 col-lg-8 col-xl-9 mx-auto">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-9">
                        <div class="card-body">
                          <h5 class="card-title badge text-white" style="background-color:#BB1C1C;">Surat Keterangan Kepemilikan Rumah</h5>
                          <p class="card-text">Surat Keterangan Kepemilikan Rumah adalah dokumen resmi yang menunjukkan bahwa seseorang atau entitas adalah pemilik sah dari sebuah rumah atau properti. Surat ini digunakan dalam berbagai transaksi properti, pinjaman hipotek, atau sebagai bukti kepemilikan dalam kasus hukum atau pajak.</p>
                        </div>
                      </div>
                      <div class="col-md-3 d-flex justify-content-center align-items-center ">
                        <a href="/buatSKKR">
                            <button type="button" class="btn btn-secondary my-2 mx-2 w-100 text-white" style="background-color:#222E3B;">Ajukan</button>
                        </a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-md-6 col-lg-4 col-xl-3 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-sm-5 col-md-8 col-lg-4 col-xl-10 text-center">
                                        <img src="{{ URL::asset('/assets/img/surat/sku.png') }}" alt="logo" style="width: 100%;" >
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-md-6 col-lg-8 col-xl-9 mx-auto">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-9">
                        <div class="card-body">
                          <h5 class="card-title badge text-white" style="background-color:#BB1C1C;">Surat Keterangan Usaha</h5>
                          <p class="card-text">Surat Keterangan Usaha adalah dokumen yang memberikan informasi terkait dengan jenis, alamat, dan detail usaha yang sedang dijalankan oleh seseorang atau perusahaan. Dokumen ini digunakan berbagai keperluan, seperti untuk mengajukan izin usaha, memenuhi persyaratan perbankan, atau sebagai bukti eksistensi usaha dalam berbagai transaksi bisnis.</p>
                        </div>
                      </div>
                      <div class="col-md-3 d-flex justify-content-center align-items-center ">
                        <a href="/buatSKU">
                            <button type="button" class="btn btn-secondary my-2 mx-2 w-100 text-white" style="background-color:#222E3B;">Ajukan</button>
                        </a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-md-6 col-lg-4 col-xl-3 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-sm-5 col-md-8 col-lg-4 col-xl-10 mx-auto text-center">
                                        <img src="{{ URL::asset('/assets/img/surat/skd.png') }}" alt="logo" style="width: 100%" >
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-md-6 col-lg-8 col-xl-9 mx-auto">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-9">
                        <div class="card-body">
                          <h5 class="card-title badge text-white" style="background-color:#BB1C1C;">Surat Keterangan Domisili</h5>
                          <p class="card-text">Surat Keterangan Domisili adalah dokumen resmi yang memberikan bukti alamat tempat tinggal seseorang atau entitas pada suatu wilayah tertentu. Sering digunakan untuk keperluan administratif seperti pembuatan dokumen, pembukaan rekening bank, atau proses perizinan.</p>
                        </div>
                      </div>
                      <div class="col-md-3 d-flex justify-content-center align-items-center ">
                        <a href="/buatSKD">
                            <button type="button" class="btn btn-secondary my-2 mx-2 w-100 text-white" style="background-color:#222E3B;">Ajukan</button>
                        </a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-md-6 col-lg-4 col-xl-3 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-sm-5 col-md-8 col-lg-4 col-xl-10 text-center">
                                        <img src="{{ URL::asset('/assets/img/surat/skk.png') }}" alt="logo" style="width: 100%;" >
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-md-6 col-lg-8 col-xl-9 mx-auto">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-9">
                        <div class="card-body">
                          <h5 class="card-title badge text-white" style="background-color:#BB1C1C;">Surat Keterangan Kematian</h5>
                          <p class="card-text">Surat Keterangan Kematian adalah dokumen resmi yang menerangkan bahwa seseorang telah meninggal dunia. Nama lengkap orang yang meninggal, tanggal dan tempat kematian, serta penyebab kematian jika diketahui. Surat ini untuk proses administratif seperti warisan, klaim asuransi dan lainya</p>
                        </div>
                      </div>
                      <div class="col-md-3 d-flex justify-content-center align-items-center ">
                        <a href="/buatSKK">
                            <button type="button" class="btn btn-secondary my-2 mx-2 w-100 text-white" style="background-color:#222E3B;">Ajukan</button>
                        </a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-md-6 col-lg-4 col-xl-3 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-sm-5 col-md-8 col-lg-4 col-xl-10 mx-auto text-center">
                                        <img src="{{ URL::asset('/assets/img/surat/skj.png') }}" alt="logo" style="width: 100%" >
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-md-6 col-lg-8 col-xl-9 mx-auto">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-9">
                        <div class="card-body">
                          <h5 class="card-title badge text-white" style="background-color:#BB1C1C;">Surat Keterangan Janda/Duda</h5>
                          <p class="card-text">Surat Keterangan Janda/Duda adalah dokumen resmi yang menegaskan status seseorang sebagai janda atau duda, Dokumen ini dapat digunakan untuk mengajukan klaim warisan, keuntungan sosial, atau perubahan status pernikahan setelah kematian pasangan. Surat keterangan ini mencakup informasi mengenai identitas individu, status perkawinan sebelumnya, dan bukti kematian pasangan.</p>
                        </div>
                      </div>
                      <div class="col-md-3 d-flex justify-content-center align-items-center ">
                        <a href="/buatSKJ">
                            <button type="button" class="btn my-2 mx-2 w-100 text-white" style="background-color:#222E3B;">Ajukan</button>
                        </a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

    </div>
</main>
@endsection
