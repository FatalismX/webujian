@extends('Layouts.admin.app', ['title' => 'Peserta'])

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <p class="fs-3 mb-0">Edit Data peserta</p>
        </div>
        <div class="col-12">
            <div class="card shadow p-4 table">
                <form action="{{ route('peserta.update', ['id' => $peserta->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" value="{{ $peserta->nama }}" class="form-control @error('nama') is-invalid @enderror"
                                    id="nama" name="nama" required placeholder="Masukkan Nama">
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="asalsekolah" class="form-label">Asal Sekolah</label>
                                <input type="text" value="{{ $peserta->asalsekolah }}" class="form-control @error('asalsekolah') is-invalid @enderror"
                                    id="asalsekolah" name="asalsekolah" required placeholder="Masukkan Asal Sekolah">
                                @error('asalsekolah')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="asalsekolah" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jeniskelamin" id="jeniskelamin">
                                    <option value="Laki Laki" @if($peserta->jeniskelamin == "Laki Laki") selected @endif>Laki Laki</option>
                                    <option value="Perempuan" @if($peserta->jeniskelamin == "Perempuan") selected @endif>Perempuan</option>
                                </select>
                                @error('asalsekolah')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" value="{{ $peserta->username }}" class="form-control @error('username') is-invalid @enderror"
                                    id="username" name="username" required placeholder="Masukkan Username">
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" required placeholder="Masukkan Password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('peserta') }}" class="btn btn-danger">Kembali</a>
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
