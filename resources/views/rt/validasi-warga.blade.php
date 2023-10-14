@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Permintaan Validasi Akun</h1>

        @livewire('validasi-warga-table')
        @livewire('validasi-warga-table2')


    </div>
</main>
@endsection
