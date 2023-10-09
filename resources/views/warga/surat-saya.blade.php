@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        {{-- <h1 class="h3 mb-3">Surat Saya</h1> --}}

        @livewire('surat-table')


    </div>
</main>
@endsection