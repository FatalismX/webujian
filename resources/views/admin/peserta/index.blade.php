@extends('Layouts.admin.app', ['title' => 'Peserta'])

@section('content')
    <div class="row">
        <div class="col-12 d-flex justify-content-between mb-3">
            <p class="fs-3 mb-0">Peserta UM-PTKIN</p>
            <a href="{{ route('peserta.create') }}" class="btn btn-costum mt-1">Tambah Data</a>
        </div>
        <div class="col-12">
            <div class="card shadow p-4 table">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Asal Sekolah</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peserta as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $item->nama}} </td>
                                </td>
                                <td>{{ $item->jeniskelamin }}</td>
                                <td>{{ $item->asalsekolah }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="/peserta/edit/{{ $item->id }}" class="btn btn-success">Edit</a>
                                        <form action="/peserta/{{ $item->id }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
