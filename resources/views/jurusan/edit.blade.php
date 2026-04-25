@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-warning text-dark">
        <h5 class="mb-0">Edit Data Jurusan</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('jurusan.update', $jurusan->id_jurusan) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Nama Jurusan</label>
                <input type="text" name="nama_jurusan" class="form-control" value="{{ $jurusan->nama_jurusan }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Akreditasi</label>
                <select name="akreditasi" class="form-select" required>
                    <option value="A" {{ $jurusan->akreditasi == 'A' ? 'selected' : '' }}>A</option>
                    <option value="B" {{ $jurusan->akreditasi == 'B' ? 'selected' : '' }}>B</option>
                    <option value="C" {{ $jurusan->akreditasi == 'C' ? 'selected' : '' }}>C</option>
                    <option value="Unggul" {{ $jurusan->akreditasi == 'Unggul' ? 'selected' : '' }}>Unggul</option>
                </select>
            </div>
            
            <div class="mt-4">
                <button type="submit" class="btn btn-warning">Update Data</button>
                <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection