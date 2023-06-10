@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Jabatan
        </div>
        <div class="card-body">
            <form action="{{ route('jabatan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kode_jabatan">Kode Jabtan</label>
                    <input type="text" name="kode_jabatan" id="kode_jabatan" class="form-control @error('kode_jabatan') is-invalid @enderror" value="{{ old('kode_jabatan') }}" >
                    @error('kode_jabatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_jabatan">Nama Jabtan</label>
                    <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control @error('kode_jabatan') is-invalid @enderror" value="{{ old('nama_jabatan') }}" >
                    @error('nama_jabatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="priode">Priode</label>
                    <input type="text" name="priode" id="priode" class="form-control @error('priode') is-invalid @enderror" value="{{ old('priode') }}" >
                    @error('priode')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('jabatan.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
