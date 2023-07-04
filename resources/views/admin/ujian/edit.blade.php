@extends('Layouts.admin.app', ['title' => 'Ujian'])

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <p class="fs-3 mb-0">Edit Data Ujian</p>
        </div>
        <div class="col-12">
            <div class="card shadow p-4 table">
                <form action="{{ route('ujian.update', ['id' => $ujian->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="jenis" class="form-label">jenis</label>
                                <input type="text" class="form-control" id="jenis" value="{{ $ujian->jenis }}" name="jenis">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">jumlah</label>
                                <input type="text" class="form-control" id="jumlah" value="{{ $ujian->jumlah }}"
                                    name="jumlah">
                            </div>
                        
                            <div class="mb-3">
                                <label for="soal" class="form-label">SOAL</label>
                                <textarea name="soal" id="soal" class="form-control" cols="30" rows="10">{{ $ujian->soal }}</textarea>
                                
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
