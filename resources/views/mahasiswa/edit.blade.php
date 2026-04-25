@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-warning text-dark">
        <h5 class="mb-0">Edit Data Mahasiswa</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('mahasiswa.update', $mahasiswa->id_mahasiswa) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Pilih Jurusan</label>
                <select name="id_jurusan" class="form-select" required>
                    <option value="">-- Pilih Jurusan --</option>
                    @foreach($jurusans as $j)
                        <option value="{{ $j->id_jurusan }}" {{ $mahasiswa->id_jurusan == $j->id_jurusan ? 'selected' : '' }}>
                            {{ $j->nama_jurusan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-warning">Update Data</button>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection