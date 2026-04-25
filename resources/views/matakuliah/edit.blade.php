@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-warning text-dark">
        <h5 class="mb-0">Edit Data Matakuliah</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('matakuliah.update', $matakuliah->id_matakuliah) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Nama Matakuliah</label>
                <input type="text" name="nama_matakuliah" class="form-control" value="{{ $matakuliah->nama_matakuliah }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah SKS</label>
                <input type="number" name="sks" class="form-control" min="1" max="6" value="{{ $matakuliah->sks }}" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Pilih Jurusan</label>
                <select name="id_jurusan" class="form-select" required>
                    <option value="">-- Pilih Jurusan --</option>
                    @foreach($jurusans as $j)
                        <option value="{{ $j->id_jurusan }}" {{ $matakuliah->id_jurusan == $j->id_jurusan ? 'selected' : '' }}>
                            {{ $j->nama_jurusan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-warning">Update Data</button>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection