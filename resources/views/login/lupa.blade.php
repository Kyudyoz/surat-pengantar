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
		<div class="container d-flex flex-column pb-4">
			<div class="row vh-100 pb-4">
				<div class="col-sm-8 col-md-8 col-lg-10 col-xl-10 mx-auto d-table h-100 pb-4">
					<div class="d-table-cell align-middle pb-4">

						<div class="text-center mt-4">
							<h1 class="h2">Masukan NIK untuk mendapatkan password</h1>
							<p class="lead">
								OTP akan dikirim melalui whatsapp yang terikat dengan akun
							</p>
						</div>
						<a href="/login" class="btn btn-danger mb-2"><i class="align-middle" data-feather="arrow-left"></i> Kembali</a>
						<div class="card">
							<div class="row g-0">
								<div class="col-md-4 text-center">
									<img src="{{ URL::asset('assets/img/icons/logo2.png') }}" class="img-fluid rounded-start" width="70%" alt="...">
								</div>
								<div class="col-md-8 mt-4">
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
