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


	<title>Lupa Password</title>
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Masukan NIK untuk mendapatkan password</h1>
							<p class="lead">
								OTP akan dikirim melalui whatsapp yang terikat dengan akun
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form action="{{ route('password.send.otp') }}" method="post">
                                        @csrf
										<div class="mb-3">
											<label class="form-label">NIK</label>
											<input class="form-control form-control-lg @error('nik') is-invalid @enderror" type="text" name="nik" placeholder="Masukan NIK"/>
                                            @error('nik')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
										</div>
										
										<div>
										</div>
										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Kirim</button>
										</div>
									</form>
									<div class="text-end mt-4">
										<small class="text-muted"><strong><a href="/login" class="text-decoration-none">Kembali ke login</a></strong></small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	@if(session()->has('loginError'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Gagal!',
            text: '{{ session()->get('loginError') }}',
        })
    </script>
	@endif
	@if(session()->has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session()->get('success') }}',
        })
    </script>
	@endif
    <script src="{{ URL::asset('/assets/js/app.js') }}"></script>

</body>

</html>
