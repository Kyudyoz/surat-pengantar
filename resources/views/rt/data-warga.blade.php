@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Data Warga {{ auth()->user()->rt->nama_rt }}</h1>

        @livewire('data-warga-table')


    </div>
</main>
@endsection
