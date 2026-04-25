@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">Tambah Data Matakuliah</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Nama Matakuliah</label>
                <input type="text" name="nama_matakuliah" class="form-control" placeholder="Contoh: Pemrograman Web 2" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah SKS</label>
                <input type="number" name="sks" class="form-control" placeholder="Contoh: 3" min="1" max="6" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Pilih Jurusan</label>
                <select name="id_jurusan" class="form-select" required>
                    <option value="">-- Pilih Jurusan --</option>
                    @foreach($jurusans as $j)
                        <option value="{{ $j->id_jurusan }}">{{ $j->nama_jurusan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-info text-white">Simpan Data</button>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection