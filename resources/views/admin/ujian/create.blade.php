@extends('Layouts.admin.app', ['title' => 'Ujian'])

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <p class="fs-3 mb-0">TAMBAH SOAL</p>
        </div>
        <div class="col-12">
            <div class="card shadow p-4 table">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('ujian.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="jenis" class="form-label">JENIS SOAL</label>
                                <input type="text" class="form-control @error('jenis') is-invalid @enderror"
                                    id="jenis" name="jenis" required placeholder="Masukkan Jenis Soal">
                                @error('jenis')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">JUMLAH SOAL</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" required
                                    placeholder="Masukkan Jumlah Soal">
                            </div>
                         <div class="col-md-12">
                            <div class="mb-3">
                                <label for="soal" class="form-label">SOAL</label>
                                <textarea name="soal" id="soal" class="form-control" cols="30" rows="10"></textarea>
                                
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('ujian') }}" class="btn btn-danger">Kembali</a>
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
