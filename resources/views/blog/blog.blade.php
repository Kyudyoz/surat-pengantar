@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Bulian News</h1>
@livewire('post-table')
    </div>
</main>
@endsection
