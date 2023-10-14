@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Permintaan Validasi Akun</h1>

        @livewire('validasi-admin-table')
        @livewire('validasi-admin-table2')


    </div>
</main>
@endsection
