@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Jabatan') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('jabatan.update', $jabatan->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama">Kode Jabatan</label>
                            <input type="text" name="kode_jabatan" id="kode_jabatan" class="form-control @error('kode_jabatan') is-invalid @enderror" value="{{ $jabatan->kode_jabatan }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="nama">Nama Jabatan</label>
                            <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control @error('nama_jabatan') is-invalid @enderror" value="{{ $jabatan->nama_jabatan }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="nama">Priode</label>
                            <input type="text" name="priode" id="nama_jabatan" class="form-control @error('priode') is-invalid @enderror" value="{{ $jabatan->priode }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('jabatan.index') }}" class="btn btn-secondary">Batal</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




