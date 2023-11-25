<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../assets/img/icons/surat.png" />
	<link href="{{ URL::asset('/assets/css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	<title>Registrasi</title>
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-8 col-xl-8 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Selamat Datang!</h1>
							<p class="lead">
								Silahkan Registrasi Akun Anda
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="row align-items-center">
                                    <div class="col-md-12 mt-3">
                                        <form action="/register" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="role" value="Warga">
                                            <input type="hidden" name="status" value="Menunggu Validasi">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5><strong>Nama Lengkap</strong></h5>
                                                <div class="mb-3">
                                                    <input class="form-control form-control-lg @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" placeholder="Masukan Nama" value="{{ old('nama') }}"/>
                                                    @error('nama')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5><strong>NIK</strong></h5>
                                                <div class="mb-3">
                                                    <input class="form-control form-control-lg @error('nik') is-invalid @enderror" type="text" name="nik" id="nik" placeholder="Masukan NIK" value="{{ old('nik') }}"/>
                                                    @error('nik')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5><strong>Tempat Lahir</strong></h5>
                                                <div class="mb-3">
                                                    <input class="form-control form-control-lg @error('tempat_lahir') is-invalid @enderror" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Masukan Tempat Lahir" value="{{ old('tempat_lahir') }}"/>
                                                    @error('tempat_lahir')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5><strong>Tanggal Lahir</strong></h5>
                                                <div class="mb-3">
                                                    <input class="form-control form-control-lg @error('tanggal_lahir') is-invalid @enderror" type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}"/>
                                                    @error('tanggal_lahir')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5><strong>Alamat</strong></h5>
                                                <div class="mb-3">
                                                    <input class="form-control form-control-lg @error('alamat') is-invalid @enderror" type="text" name="alamat" id="alamat" placeholder="Masukan Alamat" value="{{ old('alamat') }}"/>
                                                    @error('alamat')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5><strong>Jenis Kelamin</strong></h5>
                                                <div class="mb-3">
                                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select form-select-md @error('jenis_kelamin') is-invalid @enderror" required>
                                                        <option value="" hidden>Jenis Kelamin</option>
                                                        <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                        <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                    </select>
                                                    @error('jenis_kelamin')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5><strong>Agama</strong></h5>
                                                <div class="mb-3">
                                                    <select name="agama" id="agama" class="form-select form-select-md @error('agama') is-invalid @enderror" required>
                                                        <option value="" hidden>Agama</option>
                                                        <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                                        <option value="Kristen Katolik" {{ old('agama') == 'Kristen Katolik' ? 'selected' : '' }}>Kristen Katolik</option>
                                                        <option value="Kristen Protestan" {{ old('agama') == 'Kristen Protestan' ? 'selected' : '' }}>Kristen Protestan</option>
                                                        <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                                        <option value="Buddha" {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha</option>
                                                        <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                                    </select>
                                                    @error('agama')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5><strong>Status Perkawinan</strong></h5>
                                                <div class="mb-3">
                                                    <select name="status_perkawinan" id="status_perkawinan" class="form-select form-select-md @error('status_perkawinan') is-invalid @enderror" required>
                                                        <option value="" hidden>Status Perkawinan</option>
                                                        <option value="Belum Kawin" {{ old('status_perkawinan') == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                                                        <option value="Kawin" {{ old('status_perkawinan') == 'Kawin' ? 'selected' : '' }}>Kawin</option>
                                                    </select>
                                                    @error('status_perkawinan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5><strong>Pekerjaan</strong></h5>
                                                <div class="mb-3">
                                                    <input class="form-control form-control-lg @error('pekerjaan') is-invalid @enderror" type="text" name="pekerjaan" id="pekerjaan" placeholder="Masukan Pekerjaan" value="{{ old('pekerjaan') }}"/>
                                                    @error('pekerjaan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5><strong>No. Handphone/Whatsapp</strong></h5>
                                                    <div class="mb-3">
                                                        <input class="form-control form-control-lg @error('no_hp') is-invalid @enderror" type="text" name="no_hp" id="no_hp" placeholder="Nomor yang bisa dihubungi" value="{{ old('no_hp') }}"/>
                                                        @error('no_hp')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5><strong>RT</strong></h5>
                                                <div class="mb-3">
                                                    <select name="rt_id" id="rt_id" class="form-select form-select-md @error('rt_id') is-invalid @enderror" required>
                                                        <option value="" hidden>Pilih RT</option>
                                                        @foreach ($rts as $rt)
                                                        <option value="{{ $rt->id }}">{{ $rt->nama_rt }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('rt_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5><strong>Password</strong></h5>
                                                <div class="mb-3">
                                                    
                                                    <div class="input-group">
                                                        <input class="form-control pw form-control-lg @error('password') is-invalid @enderror" type="password" name="password" placeholder="Masukan password"/>
                                                        <button class="btn btn-outline-secondary toggle-pw" type="button" id="button-addon2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                                                        </button>
                                                    </div>
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5><strong>Foto KTP/KK</strong></h5>
                                                    <div class="mb-3">
                                                        <input class="form-control @error('ktp') is-invalid @enderror"
                                                        accept="image/*" type="file" id="ktp" name="ktp"
                                                        onchange="previewImage()">
                                                        <img class="img-preview img-fluid my-2 col-sm-8" style="max-height: 10em;">
                                                        @error('ktp')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5><strong>Foto Bersama KTP/KK</strong></h5>
                                                        <div class="mb-3">
                                                            <input
                                                            class="form-control @error('with_ktp') is-invalid @enderror"
                                                            accept="image/*" type="file" id="withKtp" name="with_ktp"
                                                            onchange="previewImage2()">
                                                            <img class="img-preview2 img-fluid my-2 col-sm-8" style="max-height: 10em;">
                                                            @error('with_ktp')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="d-grid gap-2 mt-3">
                                                <button type="submit" class="btn btn-lg btn-primary">Registrasi!</button>
                                            </div>
                                        </form>
                                        <div class="text-end mt-2">
										    <small class="text-muted">Sudah punya akun? <a href="/login" class="text-decoration-none">Login!</a></small>
									    </div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>


    <script>
        function previewImage() {
        const ktp = document.querySelector("#ktp");
        const imgPreview = document.querySelector(".img-preview");

        const oFReader3 = new FileReader();
        oFReader3.readAsDataURL(ktp.files[0]);
        oFReader3.onload = function (oFREvent) {
            imgPreview.style.display = 'block';
            imgPreview.src = oFREvent.target.result;
        }
    }
        function previewImage2() {
        const withKtp = document.querySelector("#withKtp");
        const imgPreview2 = document.querySelector(".img-preview2");

        const oFReader4 = new FileReader();
        oFReader4.readAsDataURL(withKtp.files[0]);
        oFReader4.onload = function (oFREvent) {
            imgPreview2.style.display = 'block';
            imgPreview2.src = oFREvent.target.result;
        }
    }
    </script>
        <script>
            document.getElementById("no_hp").addEventListener("input", function () {
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
        <script src="{{ URL::asset('/assets/js/app.js') }}"></script>
        <script>
            let pw = document.querySelector('.pw');
            let togglePw = document.querySelector('.toggle-pw');
        
            togglePw.onclick = function(){
                if (pw.type == "password") {
                    pw.type = "text";
                    pw.autocomplete = "off";
                    togglePw.classList.remove('btn-outline-secondary');
                    togglePw.classList.add('btn-secondary');
                }else{
                    pw.type = "password";
                    togglePw.classList.remove('btn-secondary');
                    togglePw.classList.add('btn-outline-secondary');
                }
            }
        </script>
</body>

</html>
