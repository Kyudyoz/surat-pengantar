@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Data User</h1>
        @auth
        @if (auth()->user()->role == 'Ketua' || auth()->user()->role == 'Admin')
        <a href="/tambahUser" class="btn btn-primary mb-3"><i class="fa-solid fa-plus" style="color: #ffffff;"></i> Tambah User</a>
        @endif
        @endauth

        @livewire('data-user-table')


    </div>
</main>
@endsection
