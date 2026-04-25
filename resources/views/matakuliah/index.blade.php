@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Daftar Matakuliah</h3>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-info text-white">Tambah Matakuliah</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($matakuliahs as $mk)
                <tr>
                    <td>{{ $mk->nama_matakuliah }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>{{ $mk->jurusan->nama_jurusan }}</td>
                    <td>
                        <a href="{{ route('matakuliah.edit', $mk->id_matakuliah) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('matakuliah.destroy', $mk->id_matakuliah) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection