@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Daftar Jurusan</h3>
    <a href="{{ route('jurusan.create') }}" class="btn btn-primary">Tambah Jurusan</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Jurusan</th>
                    <th>Akreditasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jurusans as $j)
                <tr>
                    <td>{{ $j->id_jurusan }}</td>
                    <td>{{ $j->nama_jurusan }}</td>
                    <td><span class="badge bg-primary">{{ $j->akreditasi }}</span></td>
                    <td>
                        <a href="{{ route('jurusan.edit', $j->id_jurusan) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('jurusan.destroy', $j->id_jurusan) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus jurusan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection