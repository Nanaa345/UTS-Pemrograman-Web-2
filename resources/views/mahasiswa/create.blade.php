@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="card shadow">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">Tambah Data Mahasiswa</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="Contoh: 230101" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Pilih Jurusan</label>
                <select name="id_jurusan" class="form-select" required>
                    <option value="">-- Pilih Jurusan --</option>
                    @foreach($jurusans as $j)
                        <option value="{{ $j->id_jurusan }}">{{ $j->nama_jurusan }} (Akreditasi: {{ $j->akreditasi }})</option>
                    @endforeach
                </select>
                <small class="text-muted">Data ini diambil otomatis dari tabel Jurusan</small>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success text-white">Simpan Data</button>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection

    