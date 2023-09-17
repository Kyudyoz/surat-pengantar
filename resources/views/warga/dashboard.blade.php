@extends('layouts.main')
@section('main')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>{{ auth()->user()->nama }}</strong> Dashboard</h1>

        <div class="row">
            <div class="col-xl-6 col-xxl-6 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Surat pengantar yang dibuat</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="mail"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">{{ $jmlSurat }}</h1>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Surat pengantar yang sudah disetujui</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="check-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">{{ $jmlDisetujui }}</h1>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Surat pengantar yang belum disetujui</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="refresh-cw"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">{{ $jmlDiproses }}</h1>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Surat pengantar yang tidak disetujui</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="slash"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">{{ $jmlDitolak }}</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-xl-6 col-xxl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Kalender</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center text-center w-100">
                            <div class="chart">
                                <div id="datetimepicker-dashboard"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @livewire('surat-table')


    </div>
</main>
@endsection
