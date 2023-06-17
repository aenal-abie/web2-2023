@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Daftar Jabatan</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Jabatan</th>
                        <th>Priode</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jabatans as $k)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $k->kode_jabatan }}</td>
                            <td>{{ $k->nama_jabatan }}</td>
                            <td>{{ $k->priode }}</td>
                            <td>
                            <a href="{{ route('jabatan.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('jabatan.destroy', $k->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
