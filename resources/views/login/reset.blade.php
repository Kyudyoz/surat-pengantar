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


	<title>Reset Password</title>
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<a href="/lupa-password" class="btn btn-danger mb-2"><i class="align-middle" data-feather="arrow-left"></i> Kembali</a>
						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form action="{{ route('password.reset') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="nik" value="{{ session('nik') }}">
										<div class="mb-3">
											<label class="form-label">OTP</label>
											<input class="form-control form-control-lg @error('otp') is-invalid @enderror" type="text" name="otp" placeholder="Masukan otp"/>
                                            @error('otp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
										</div>
                                        <div class="mb-3">
											<label class="form-label">Password</label>
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
										
										<div>
										</div>
										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Reset!</button>
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
