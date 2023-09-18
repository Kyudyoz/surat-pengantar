@extends('layouts.main')
@section('main')
<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-8 col-xl-8 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    @foreach ($users as $user)

                    <div class="text-center mt-4">
                        <h1 class="h2">Ubah Password</h1>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto">
                                    <div class="m-sm-8">
                                        <form action="/updatePass/{{ $user->id }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                                            <div class="mb-3">
                                                <label class="form-label">Password Baru</label>
                                                <input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" placeholder="Masukan Password Baru"/>
                                                @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="d-grid gap-2 mt-3">
                                                <button type="submit" class="btn btn-lg btn-primary">Ubah Password!</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
