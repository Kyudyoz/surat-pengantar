@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Data Warga {{ auth()->user()->rt->nama_rt }}</h1>

        {{-- @auth
        @if (auth()->user()->role == 'Ketua' || auth()->user()->role == 'Admin')
        <a href="/tambahWarga" class="btn btn-primary mb-3"><i class="fa-solid fa-plus" style="color: #ffffff;"></i> Tambah Warga</a>
        @endif
        @endauth --}}

        @livewire('data-warga-table')


    </div>
</main>
@endsection
