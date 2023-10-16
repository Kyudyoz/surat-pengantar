@extends('layouts.main')
@section('main')

<style>
        @media (max-width: 991.98px){
        .sidebar.collapsed {
             margin-left: -260px; 
        }
        .sidebar {
            margin-left: 0;
        }
        }
        }
</style>
    <section class="landing">
        <h2 id="text"><span>Surat RT digital ya...</span><br>TANDA.RT</h2>
        <img src="/img/bird1.png" id="bird1">
        <img src="/img/bird2.png" id="bird2">
        <img src="/img/rumah2.png" id="rumah2">
        <img src="/img/rumah.png" id="rumah">
        @guest
        <a href="/login" id="btn">Login</a>
        @endguest
        <img src="/img/semak.png" id="semak">
        <img src="/img/jalan.png" id="jalan">
    </section>   
   

<div class="klaim">
        <div class="col-lg-8 mx-4" style="">
            <h4><b>
                    Cepat, tepat dan aman
                </b>
                <br/>
            </h4>
            <p>     
                Bergabunglah dengan kami dan rasakan kehebatannya
            </p>
        </div>
</div>
<div class="row row-cols-2 row-cols-md-3 g-0">       
  <div class="col">
    <div class="card h-100">
      <img src="assets/img/surat/sktm.png" class="card-img-top" alt="...">
      <div class="card-body mx-3 mt-3 ">
        <h5 class="card-title" style="color: #222E3B">Surat Pengantar Keterangan Tidak Mampu</h5>
        <p class="card-text">Surat Keterangan Tidak Mampu adalah dokumen resmi yang membuktikan bahwa seseorang atau keluarganya tidak memiliki kemampuan finansial untuk memenuhi kebutuhan dasar mereka. Ini digunakan untuk mengajukan bantuan sosial atau keringanan biaya.</p>
      </div>
      <div class="card-footer mx-3 mb-3">
      <div class="d-grid gap-1">
      @if(!(auth()->user()) || (auth()->user()->role == 'Warga'))
      <a href="/buatSKTM" type="button" class="btn btn-dark">Buat Surat</a>
      @endif
      </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="assets/img/surat/skkr.png" class="card-img-top" alt="...">
      <div class="card-body mx-3 mt-3">
        <h5 class="card-title" style="color: #222E3B">Surat Keterangan Kepemilikan Rumah</h5>
        <p class="card-text">Surat Keterangan Kepemilikan Rumah adalah dokumen resmi yang menunjukkan bahwa seseorang atau entitas adalah pemilik sah dari sebuah rumah atau properti. Surat ini digunakan dalam berbagai transaksi properti, pinjaman hipotek, atau sebagai bukti kepemilikan dalam kasus hukum atau pajak.</p>
      </div>
      <div class="card-footer mx-3 mb-3">
      <div class="d-grid gap-1">
      @if(!(auth()->user()) || (auth()->user()->role == 'Warga'))
      <a href="/buatSKKR" type="button" class="btn btn-dark">Buat Surat</a>
      @endif
      </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="assets/img/surat/sku.png" class="card-img-top" alt="...">
      <div class="card-body mx-3 mt-3">
        <h5 class="card-title" style="color: #222E3B">Surat Keterangan Usaha</h5>
        <p class="card-text">Surat Keterangan Usaha adalah dokumen yang memberikan informasi terkait dengan jenis, alamat, dan detail usaha yang sedang dijalankan oleh seseorang atau perusahaan. Dokumen ini digunakan berbagai keperluan, seperti untuk mengajukan izin usaha, memenuhi persyaratan perbankan, atau sebagai bukti eksistensi usaha dalam berbagai transaksi bisnis.</p>
      </div>
      <div class="card-footer mx-3 mb-3">
      <div class="d-grid gap-1">
      @if(!(auth()->user()) || (auth()->user()->role == 'Warga'))
      <a href="/buatSKU" type="button" class="btn btn-dark">Buat Surat</a>
      @endif
      </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="assets/img/surat/skd.png" class="card-img-top" alt="...">
      <div class="card-body mx-3 mt-3">
        <h5 class="card-title" style="color: #222E3B">Surat Keterangan Domisili</h5>
        <p class="card-text">Surat Keterangan Domisili adalah dokumen resmi yang memberikan bukti alamat tempat tinggal seseorang atau entitas pada suatu wilayah tertentu. Sering digunakan untuk keperluan administratif seperti pembuatan dokumen, pembukaan rekening bank, atau proses perizinan.</p>
      </div>
      <div class="card-footer mx-3 mb-3">
      <div class="d-grid gap-1">
      @if(!(auth()->user()) || (auth()->user()->role == 'Warga'))
      <a href="/buatSKD" type="button" class="btn btn-dark">Buat Surat</a>
      @endif
      </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="assets/img/surat/skk.png" class="card-img-top" alt="...">
      <div class="card-body mx-3 mt-3">
        <h5 class="card-title" style="color: #222E3B">Surat Keterangan Kematian</h5>
        <p class="card-text">Surat Keterangan Kematian adalah dokumen resmi yang menerangkan bahwa seseorang telah meninggal dunia. Nama lengkap orang yang meninggal, tanggal dan tempat kematian, serta penyebab kematian jika diketahui. Surat ini untuk proses administratif seperti warisan, klaim asuransi dan lainya</p>
      </div>
      <div class="card-footer mx-3 mb-3">
      <div class="d-grid gap-1">
      @if(!(auth()->user()) || (auth()->user()->role == 'Warga'))
      <a href="/buatSKK" type="button" class="btn btn-dark">Buat Surat</a>
      @endif
      </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="assets/img/surat/skj.png" class="card-img-top" alt="...">
      <div class="card-body mx-3 mt-3">
        <h5 class="card-title" style="color: #222E3B">Surat Keterangan Janda/Duda</h5>
        <p class="card-text">Surat Keterangan Janda/Duda adalah dokumen resmi yang menegaskan status seseorang sebagai janda atau duda, Dokumen ini dapat digunakan untuk mengajukan klaim warisan, keuntungan sosial, atau perubahan status pernikahan setelah kematian pasangan. Surat keterangan ini mencakup informasi mengenai identitas individu, status perkawinan sebelumnya, dan bukti kematian pasangan.</p>
      </div>
      <div class="card-footer mx-3 mb-3">
      <div class="d-grid gap-1">
      @if(!(auth()->user()) || (auth()->user()->role == 'Warga'))
      <a href="/buatSKJ" type="button" class="btn btn-dark">Buat Surat</a>
      @endif
      </div>
      </div>
    </div>
  </div>
</div>

<div class="klaim">
        <div class="col-lg-8 mx-4" style="">
            <h4><b>
                    Siapa saja yang bisa menggunakan layanan ini?
                </b>
                <br/>
            </h4>
            <p>
            Penduduk negara Indonesia yang menduduki atau tinggal di suatu daerah secara permanen atau temporer seperti Ketua RT dan Warganya.
            </p>
        </div>
</div>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<div class="dual">
    <div class="dual2">
    <i class="bi bi-people-fill" style="font-size: 2rem;"></i>
            <h4 style="color:white"><b>
                Warga
                </b>
                <br>
            </h4>
            <p class="mx-5">     
            Warga berhak membuat serta mencetak surat pada lingkup RT sesuai dengan jenis, keperluan dan persetujuan dari Ketua RT.
            </p>
    </div>
    <div class="dual3">
    <i class="bi bi-person-workspace" style="font-size: 2rem;"></i>
            <h4 style="color:white"><b>
                Ketua RT
                </b>
                <br>
            </h4>
            <p class="mx-5">     
            Ketua RT berhak menyetujui serta mentandatangani surat pada lingkup RT sesuai dengan kejelasan, kebenaran, dan keperluan dari Warga.
            </p>
        </div>
</div>

<div class="klaim">
        <div class="col-lg-8 mx-4" style="">
            <h4><b>
                    Banyak lingkungan RT yang puas dengan layanan kami
                </b>
                <br/>
            </h4>
            <p>     
            Kecepatan, ketepatan dan keamanan adalah kuncinya
            </p>
        </div>
</div>

<div class="unggul">
        <div class="col-lg-8 mx-4" style="color:white">
        <img src="\img\logoRT.png" class="logo rounded">  
        <h4 style="color:white"><b>
                    Tentang Kami
                </b>
                <br>
            </h4>
            <p>     
                TANDA.RT merupakan teknologi digital yang membantu segala urusan surat menyurat tingkat RT dengan cepat, tepan, dan aman. Sehingga hubungan antara ketua dan warga tetap terjaga kerharmonisannya.
            </p>
        </div>
</div>
@endsection