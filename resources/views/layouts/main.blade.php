<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ URL::asset('/assets/img/icons/surat.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link href="{{ URL::asset('/assets/css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <style>
        trix-toolbar [data-trix-button-group ="file-tools"]{
          display: none;
        }
        trix-editor{
          background-color: white;
        }
        .trix-button-group{
          background-color: white;
        }

        .pict .upload {
            width: 125px;
            position: relative;
            margin: auto;
        }

        .pict .upload img {
            border-radius: 50%;
            border: 2px solid #999898;
            background-color: white;
        }

        .pict .upload .round {
            position: absolute;
            display: inline;
            background: #202521;
            bottom: 0;
            right: 0;
            width: 33px;
            height: 33px;
            line-height: 33px;
            text-align: center;
            border-radius: 50%;
            overflow: hidden;
        }

        .pict .upload .round input[type="file"] {
            position: absolute;
            transform: scale(2);
            opacity: 0;
        }

        .pict .upload .round input[type="file"]::-webkit-file-upload-button {
            cursor: pointer;
        }

        .table {
            background-color: white;
        }
        
        @media (max-width: 480px) {
        .table, thead, tbody, tr, td {
            width: 100%;
            overflow-x: scroll;
            }
        .btn{
            display: block;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        }
      </style>

	<title>{{ $title }}</title>
    @livewireStyles
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
		    <div class="sidebar-content js-simplebar">
		        <a class="sidebar-brand" style="cursor: default">
		            <p class="align-middle">Selamat Datang</p>
                    @auth
                    @if (auth()->user()->role != 'Admin')
		            <span class="align-middle">{{ auth()->user()->role }} {{ auth()->user()->rt->nama_rt }}</span>
                    @else
		            <span class="align-middle">{{ auth()->user()->role }}</span>
                    @endif
                    @endauth
		        </a>

		        <ul class="sidebar-nav">
                    @auth
                    <li class="sidebar-header">
		                Halaman Utama
		            </li>

                    @if (auth()->user()->role == 'Ketua')
                    <li class="sidebar-item {{ ($active === "Dashboard RT") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/dashboardRt">
		                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Dashboard</span>
		                </a>
		            </li>
                    @elseif(auth()->user()->role == 'Warga')
                    <li class="sidebar-item {{ ($active === "Dashboard Warga") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/dashboard">
		                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Dashboard</span>
		                </a>
		            </li>
                    @elseif(auth()->user()->role == 'Admin')
                    <li class="sidebar-item {{ ($active === "Dashboard Admin") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/dashboardAdmin">
		                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Dashboard</span>
		                </a>
		            </li>
                    @endif

		            <li class="sidebar-item {{ ($active === "Profil") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/profil">
		                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profil</span>
		                </a>
		            </li>

                    @if (auth()->user()->role == 'Ketua')
                    <li class="sidebar-header">
		                Fitur Ketua RT
		            </li>

		            <li class="sidebar-item {{ ($active === "Validasi") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/validasi">
		                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Validasi Surat Pengantar</span>
		                </a>
		            </li>
		            <li class="sidebar-item {{ ($active === "Data Warga") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/dataWarga">
		                    <i class="align-middle" data-feather="server"></i> <span class="align-middle">Data Warga</span>
		                </a>
		            </li>
		            <li class="sidebar-item {{ ($active === "Unggah Tanda Tangan") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/unggahTtd">
		                    <i class="align-middle" data-feather="upload"></i> <span class="align-middle">Unggah Tanda Tangan</span>
		                </a>
		            </li>
		            <li class="sidebar-item {{ ($active === "Validasi Akun Warga") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/validasiWarga">
		                    <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Validasi Akun Warga</span>
		                </a>
		            </li>
                    @elseif(auth()->user()->role == 'Warga')
                    <li class="sidebar-header">
		                Fitur
		            </li>

		            <li class="sidebar-item {{ ($active === "Buat Surat") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/buatSurat">
		                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Buat Surat</span>
		                </a>
		            </li>
		            <li class="sidebar-item {{ ($active === "Surat Saya") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/suratSaya">
		                    <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Surat Saya</span>
		                </a>
		            </li>
                    @elseif(auth()->user()->role == 'Admin')
                    <li class="sidebar-header">
		                Fitur Admin
		            </li>

		            <li class="sidebar-item {{ ($active === "Tambah RT") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/tambahRt">
		                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tambah RT</span>
		                </a>
		            </li>
		            <li class="sidebar-item {{ ($active === "Data RT") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/dataRt">
		                    <i class="align-middle" data-feather="hash"></i> <span class="align-middle">Data RT</span>
		                </a>
		            </li>
		            <li class="sidebar-item {{ ($active === "Data Warga") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/dataUser">
		                    <i class="align-middle" data-feather="align-right"></i> <span class="align-middle">Data User</span>
		                </a>
		            </li>
                    <li class="sidebar-item {{ ($active === "Validasi Akun User") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/validasiAkun">
		                    <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Validasi Akun User</span>
		                </a>
		            </li>
                    @endif

		            <li class="sidebar-header">
		                Umum
		            </li>

		            <li class="sidebar-item {{ ($active === "Blog") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/">
		                    <i class="align-middle" data-feather="slack"></i> <span class="align-middle">Bulian News</span>
		                </a>
		            </li>
		            <li class="sidebar-item {{ ($active === "Info RT") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/infoRt">
		                    <i class="align-middle" data-feather="info"></i> <span class="align-middle">Informasi RT/RW</span>
		                </a>
		            </li>
                    <li class="sidebar-item {{ ($active === "landing") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/landing">
		                    <i class="align-middle" data-feather="info"></i> <span class="align-middle">Landing Page</span>
		                </a>
		            </li>
                    @else
                    <li class="sidebar-header">
		                Umum
		            </li>

		            <li class="sidebar-item {{ ($active === "Blog") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/">
		                    <i class="align-middle" data-feather="slack"></i> <span class="align-middle">Bulian News</span>
		                </a>
		            </li>
                    <li class="sidebar-item {{ ($active === "Info RT") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/infoRt">
		                    <i class="align-middle" data-feather="info"></i> <span class="align-middle">Informasi RT/RW</span>
		                </a>
		            </li>
                    <li class="sidebar-item {{ ($active === "landing") ? 'active' : '' }}">
		                <a class="sidebar-link" href="/landing">
		                    <i class="align-middle" data-feather="info"></i> <span class="align-middle">Landing Page</span>
		                </a>
		            </li>
                    @endauth
		        </ul>
		    </div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
				    <i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
				    <ul class="navbar-nav navbar-align">
                        @auth
				        <li class="nav-item dropdown">
				            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
				                <i class="align-middle" data-feather="settings"></i>
				            </a>

				            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                @if (auth()->user()->image)
                                    <img src="{{ URL::asset('storage/'. auth()->user()->image) }}" class="avatar img-fluid rounded me-1"
                                    alt="{{ auth()->user()->nama }}" />
                                    <span class="text-dark">{{ auth()->user()->nama }}</span>
                                @else
                                    @if (auth()->user()->jenis_kelamin == 'Laki-laki')
                                    <img src="{{ URL::asset('/assets/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1"
                                        alt="{{ auth()->user()->nama }}" />
                                        <span class="text-dark">{{ auth()->user()->nama }}</span>
                                    @else
                                    <img src="{{ URL::asset('/assets/img/avatars/avatar-5.jpg') }}" class="avatar img-fluid rounded me-1"
                                        alt="{{ auth()->user()->nama }}" />
                                        <span class="text-dark">{{ auth()->user()->nama }}</span>
                                    @endif
                                @endif
				            </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="/profil"><i class="align-middle me-1" data-feather="user"></i> Profil</a>
								<a class="dropdown-item" href="/pengaturan"><i class="align-middle me-1" data-feather="settings"></i> Pengaturan Akun</a>
								{{-- <div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/bantuan"><i class="align-middle me-1" data-feather="help-circle"></i> Bantuan</a> --}}
								<div class="dropdown-divider"></div>
								<form action="/logout" method="POST">
                                    @csrf
                                    <button class="nav-link" type="submit">&nbsp;&nbsp;<i class="align-middle me-1" data-feather="log-out"></i> Logout</button>
                                </form>
							</div>
						</li>
                        @else
                        <li class="nav-item">
                            <a href="/login" class="nav-link"><i class="align-middle me-1" data-feather="log-in"></i> Login</a>
                        </li>
                        @endauth
					</ul>
				</div>
			</nav>

			@yield('main')

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-sm-7 text-end">
							<small class="mb-0">
								Muara Bulian &copy;2023
							</small>
						</div>
						<div class="col-sm-3 text-center">
							<small class="mb-0">
								Kontak Admin : 
                                <a href="https://wa.me/62895082566261" class="text-decoration-none text-black-50">
                                    <i class="fa-solid fa-phone fa-lg"> </i>
                                    Admin
                                </a>
							</small>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
    @if(session()->has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session()->get('success') }}',
        })
    </script>
    @elseif(session()->has('loginSuccess'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Login Berhasil!',
            text: '{{ session()->get('loginSuccess') }}',
        })
    </script>
    @endif
    @if (session()->has('ttdError'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Gagal!',
            text: '{{ session()->get('ttdError') }}',
        })
    </script>
    @endif
    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
        $('.select2').select2();
        });
    </script>

    <script>
        $('.delete').click(function () {
            let suratId = $(this).attr('data-id');

            Swal.fire({
                title: 'Yakin?',
                text: "Surat yang dihapus tidak bisa dikembalikan",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/hapusSurat/"+suratId+""

                }
            })
        })
        $('.deletePost').click(function () {
            let postSlug = $(this).attr('data-id');

            Swal.fire({
                title: 'Yakin?',
                text: "Posingan yang dihapus tidak bisa dikembalikan",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/deletePost/"+postSlug+""

                }
            })
        })
    </script>

    <script src="https://kit.fontawesome.com/057baadc3d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<script src="{{ URL::asset('/assets/js/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/id.js"></script> <!-- Bahasa Indonesia -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            flatpickr.localize(flatpickr.l10ns.id); // Mengatur bahasa menjadi Bahasa Indonesia
            var date = new Date(Date.now());
            var options = {
                inline: true,
                prevArrow: "<span title=\"Bulan Sebelumnya\">&laquo;</span>",
                nextArrow: "<span title=\"Bulan Selanjutnya\">&raquo;</span>",
                defaultDate: date,
                enableTime: false, // Menampilkan waktu
                noCalendar: false, // Tidak menampilkan kalender
                time_24hr: true, // Format waktu 24 jam
                timeFormat: "H:i:S", // Menampilkan detik
                dateFormat: "d-m-Y H:i:S", // Menampilkan tanggal, bulan, tahun, jam, menit, dan detik
                timeZone: "Asia/Jakarta", // Mengatur zona waktu Indonesia (WIB)
                minuteIncrement: 1, // Mengatur interval peningkatan menit
                readOnly: true // Membuat jam dan menit tidak dapat diedit
            };
            flatpickr("#datetimepicker-dashboard", options);
        });
    </script>
<script>
    document.getElementById('imageProfil').onchange =function(){
      document.getElementById('form').submit();
    }
</script>
<script>
    const judul = document.querySelector("#judul");
    const slug = document.querySelector("#slug");

    judul.addEventListener("change", function () {
        fetch("/create/checkSlug?judul=" + judul.value)
            .then((response) => response.json())
            .then((data) => (slug.value = data.slug));
    });

    document.addEventListener("trix-file-accept", function(e){
        e.preventDefault();
    });

    function previewImage() {
        const image = document.querySelector("#image");
        const ktp = document.querySelector("#ktp");
        const withKtp = document.querySelector("#withKtp");
        const imgPreview = document.querySelector(".img-preview");
        const imgPreview2 = document.querySelector(".img-preview2");


        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function (oFREvent) {
            imgPreview.style.display = 'block';
            imgPreview.src = oFREvent.target.result;
        }
        const oFReader2 = new FileReader();
        oFReader2.readAsDataURL(image.files[0]);
        oFReader2.onload = function (oFREvent) {
            imgPreview2.src = oFREvent.target.result;
        }
        const oFReader3 = new FileReader();
        oFReader3.readAsDataURL(ktp.files[0]);
        oFReader3.onload = function (oFREvent) {
            imgPreview.style.display = 'block';
            imgPreview.src = oFREvent.target.result;
        }
        const oFReader4 = new FileReader();
        oFReader4.readAsDataURL(withKtp.files[0]);
        oFReader4.onload = function (oFREvent) {
            imgPreview.style.display = 'block';
            imgPreview.src = oFREvent.target.result;
        }
    }


    </script>
    <script>
    document.getElementById("no_hp").addEventListener("input", function() {
      var input = this.value;
      input = input.replace(/\+|-/g, ""); // Menghapus tanda "+" atau "-"
      input = input.replace(/[^\d]/g, ""); // Menghapus karakter selain digit

      // Memastikan angka pertama tidak diisi dengan 0 dan diganti dengan 62
      if (input.startsWith("0")) {
        input = "62" + input.substr(1);
      }

      this.value = input;
    });

      </script>


</body>

</html>
