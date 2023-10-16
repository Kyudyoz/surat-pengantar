@extends('layouts.main')
@section('main')
<link rel="stylesheet" href="css/styles.css">
    <section class="landing">
        <h2 id="text"><span>Surat RT digital ya...</span><br>TANDA.RT</h2>
        <img src="/img/bird1.png" id="bird1">
        <img src="/img/bird2.png" id="bird2">
        <img src="/img/rumah2.png" id="rumah2">
        <img src="/img/rumah.png" id="rumah">
        <a href="#scroll" id="btn" class="page-scroll">Login</a>
        <img src="/img/semak.png" id="semak">
        <img src="/img/jalan.png" id="jalan">
    </section>   
    <script>   
    let text = document.getElementById("text");
    let bird1 = document.getElementById("bird1");
    let bird2 = document.getElementById("bird2");
    let btn = document.getElementById("btn");
    let semak = document.getElementById("semak");
    let rumah2 = document.getElementById("rumah2");
    let rumah = document.getElementById("rumah");
    let jalan = document.getElementById("jalan");

    window.addEventListener("scroll", function () {
        let value = window.scrollY;
        text.style.top = 50 + value * -0.35 + "%";
        bird1.style.top = value * -1.5 + "%";
        bird1.style.left = value * 2 + "%";
        bird2.style.top = value * -1.5 + "%";
        bird2.style.left = value * -5 + "%";
        btn.style.top = value * 1.5 + "px";
        semak.style.top = value * -0.08 + "px";
        rumah.style.top = value * 0.0 + "px";
        rumah2.style.top = value * 0.0 + "px";
    }) 
    </script>
    
</link>

<div class="klaim">
        <div class="tklaim col-lg-8 mx-4" style="">
            <h4 style="color:white;"><b>
                    Cepat, tepat dan aman
                </b>
                <br/>
            </h4>
            <p>     
                Bergabunglah dengan kami dan rasakan kehebatannya
            </p>
        </div>
</div>

<div class="row row-cols-2 row-cols-md-3 g-0" style="text-align:center;">       
  <div class="col">
    <div class="card h-100">
      <img src="assets/img/surat/sktm.png" class="card-img-top" alt="...">
      <div class="card-body mx-3 mt-3 ">
        <h5 class="card-title" style="color: #222E3B">Surat Pengantar Keterangan Tidak Mampu</h5>
        <p class="card-text">Surat Keterangan Tidak Mampu adalah dokumen resmi yang membuktikan bahwa seseorang atau keluarganya tidak memiliki kemampuan finansial untuk memenuhi kebutuhan dasar mereka.</p>
      </div>
      <div class="card-footer mx-3 mb-3">
      <div class="d-grid gap-1">
      <a href="/login" type="button" class="btn btn-dark">Buat Surat</a>
      </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="assets/img/surat/skkr.png" class="card-img-top" alt="...">
      <div class="card-body mx-3 mt-3">
        <h5 class="card-title" style="color: #222E3B">Surat Keterangan Kepemilikan Rumah</h5>
        <p class="card-text">Surat Keterangan Kepemilikan Rumah adalah dokumen resmi yang menunjukkan bahwa seseorang atau entitas adalah pemilik sah dari sebuah rumah atau properti.</p>
      </div>
      <div class="card-footer mx-3 mb-3">
      <div class="d-grid gap-1">
      <a href="/login" type="button" class="btn btn-dark">Buat Surat</a>
      </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="assets/img/surat/sku.png" class="card-img-top" alt="...">
      <div class="card-body mx-3 mt-3">
        <h5 class="card-title" style="color: #222E3B">Surat Keterangan Usaha</h5>
        <p class="card-text">Surat Keterangan Usaha adalah dokumen yang memberikan informasi terkait dengan jenis, alamat, dan detail usaha yang sedang dijalankan oleh seseorang atau perusahaan.</p>
      </div>
      <div class="card-footer mx-3 mb-3">
      <div class="d-grid gap-1">
      <a href="/login" type="button" class="btn btn-dark">Buat Surat</a>
      </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="assets/img/surat/skd.png" class="card-img-top" alt="...">
      <div class="card-body mx-3 mt-3">
        <h5 class="card-title" style="color: #222E3B">Surat Keterangan Domisili</h5>
        <p class="card-text">Surat Keterangan Domisili adalah dokumen resmi yang memberikan bukti alamat tempat tinggal seseorang atau entitas pada suatu wilayah tertentu.</p>
      </div>
      <div class="card-footer mx-3 mb-3">
      <div class="d-grid gap-1">
      <a href="/login" type="button" class="btn btn-dark">Buat Surat</a>
      </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="assets/img/surat/skk.png" class="card-img-top" alt="...">
      <div class="card-body mx-3 mt-3">
        <h5 class="card-title" style="color: #222E3B">Surat Keterangan Kematian</h5>
        <p class="card-text">Surat Keterangan Kematian adalah dokumen resmi yang menerangkan bahwa seseorang telah meninggal dunia.</p>
      </div>
      <div class="card-footer mx-3 mb-3">
      <div class="d-grid gap-1">
      <a href="/login" type="button" class="btn btn-dark">Buat Surat</a>
      </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="assets/img/surat/skj.png" class="card-img-top" alt="...">
      <div class="card-body mx-3 mt-3">
        <h5 class="card-title" style="color: #222E3B">Surat Keterangan Janda/Duda</h5>
        <p class="card-text">Surat Keterangan Janda/Duda adalah dokumen resmi yang menegaskan status seseorang sebagai janda atau duda.</p>
      </div>
      <div class="card-footer mx-3 mb-3">
      <div class="d-grid gap-1">
      <a href="/login" type="button" class="btn btn-dark">Buat Surat</a>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="klaim">
        <div class="tklaim col-lg-4 col-xs-4 mx-5" style="">
            <h4 style="color:white;"><b>
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
            <p class="teks">     
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
            <p class="teks">     
            Ketua RT berhak menyetujui serta mentandatangani surat pada lingkup RT sesuai dengan kejelasan, kebenaran, dan keperluan dari Warga.
            </p>
        </div>
</div>

<div class="klaim">
        <div class="tklaim col-lg-8 mx-4" style="">
            <h4 style="color:white;"><b>
            Layanan dalam bentuk Website 
                </b>
                <br/>
            </h4>
            <p>     
            Dapat diakses di berbagai platform
            </p>
        </div>
</div>

<div class="mockup_hp">
        <div class="col-lg-8 mx-4" style="color:white">
        <img src="\img\mockup.png" class="mockup">
        <h4 style="color:white"><b>
                    Tampilan modern dan ramah usia
                </b>
                <br>
            </h4>
            <p>     
                Kami memberikan tampilan dengan menimbang berbagai aspek kepentingan agar pengguna paham dan nyaman
            </p>
            </div>
</div>

<div class="klaim">
        <div class="tklaim col-lg-8 mx-4" style="">
            <h4 style="color:white;"><b>
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
        <img src="\img\logoRT.png" class="logo">
        <h4 style="color:white"><b>
                    Tentang Kami
                </b>
                <br>
            </h4>
            <p>     
                TANDA.RT merupakan teknologi digital yang membantu segala urusan surat menyurat tingkat RT dengan cepat, tepan, dan aman. Sehingga hubungan antara ketua dan warga tetap terjaga keharmonisannya.
            </p>
        </div>
</div>
@endsection