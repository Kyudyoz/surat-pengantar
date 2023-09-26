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


	<title>Login</title>
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Selamat Datang Kembali!</h1>
							<p class="lead">
								Silahkan Login Untuk Melanjutkan
							</p>
						</div>

						<div class="card">
							<div class="card-body">
                                {{-- @if (session()->has('loginError'))

                                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                    <strong class="text-danger text-center"><em>{{ session('loginError') }}</em></strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif --}}
								<div class="m-sm-3">
									<form action="/login" method="post">
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
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" placeholder="Masukan password" />
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
										</div>
										<div>
										</div>
										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Login</button>
										</div>
									</form>
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
            title: 'Login Gagal!',
            text: '{{ session()->get('loginError') }}',
        })
    </script>
	@endif
    <script src="{{ URL::asset('/assets/js/app.js') }}"></script>

</body>

</html>
