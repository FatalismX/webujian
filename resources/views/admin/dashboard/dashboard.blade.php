@extends('Layouts.admin.app', ['title' => 'Dashboard'])

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card p-4 shadow border-none">
                <p>Jumlah Data Peserta</p>
                <p class="fs-3 mb-0">{{ $jumlahdata }}</p>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-4">
            <div class="card p-4 shadow border-none">
                <p>Jumlah Data Soal</p>
                <p class="fs-3 mb-0">{{ $jumlahdata }}</p>
            </div>
        </div>
    </div>
@endsection
