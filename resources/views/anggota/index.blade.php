@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Data Anggota</h2>
        <a href="{{ route('anggota.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Tambah Anggota
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Kode Anggota</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($anggotas as $anggota)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $anggota->kode_anggota }}</td>
                <td>{{ $anggota->nama }}</td>
                <td>{{ $anggota->kelas }}</td>
                <td>{{ $anggota->jurusan }}</td>
                <td>{{ $anggota->alamat }}</td>
                <td>{{ $anggota->no_telp }}</td>
                <td class="d-flex gap-2">
                    <a href="{{ route('anggota.edit', $anggota->id) }}" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <form action="{{ route('anggota.destroy', $anggota->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center text-muted">Belum ada data anggota.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
