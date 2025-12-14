@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Data Anggota</h2>
    <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Kode Anggota</label>
            <input type="text" name="kode_anggota" class="form-control" value="{{ old('kode_anggota', $anggota->kode_anggota) }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $anggota->nama) }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ old('kelas', $anggota->kelas) }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan', $anggota->jurusan) }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="2">{{ old('alamat', $anggota->alamat) }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">No Telp</label>
            <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp', $anggota->no_telp) }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
