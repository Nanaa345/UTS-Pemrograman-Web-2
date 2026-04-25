<?php
namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class MahasiswaController extends Controller {
    public function index() {
        $mahasiswas = Mahasiswa::with('jurusan')->get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create() {
        $jurusans = Jurusan::all(); 
        return view('mahasiswa.create', compact('jurusans')); 
    }

    public function store(Request $request) {
        $request->validate(['nim' => 'required|unique:mahasiswas', 'nama' => 'required', 'id_jurusan' => 'required']);
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambah');
    }

    public function edit($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $jurusans = Jurusan::all(); 
        return view('mahasiswa.edit', compact('mahasiswa', 'jurusans'));
    }

    public function update(Request $request, $id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa diupdate');
    }

    public function destroy($id) {
        Mahasiswa::destroy($id);
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa dihapus');
    }
}