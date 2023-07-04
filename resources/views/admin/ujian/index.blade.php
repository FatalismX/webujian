@extends('Layouts.admin.app', ['title' => 'Ujian'])

@section('content')
    <div class="row">
        <div class="col-12 d-flex justify-content-between mb-3">
            <p class="fs-3 mb-0">Ujian UM-PTKIN</p>
            <a href="{{ route('ujian.create') }}" class="btn btn-costum mt-1">Tambah Data</a>
        </div>
        <div class="col-12">
            <div class="card shadow p-4 table">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Soal</th>
                            <th>Jumlah Soal</th>
                            <th>Soal</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ujian as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $item->jenis}} </td>
                                </td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->soal }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="/ujian/edit/{{ $item->id }}" class="btn btn-success">Edit</a>
                                        <form action="/ujian/{{ $item->id }}" method="POST">
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
