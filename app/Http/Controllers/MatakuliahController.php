<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class MatakuliahController extends Controller {
    public function index() {
        $matakuliahs = Matakuliah::with('jurusan')->get();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    public function create()
    {
        $jurusans = \App\Models\Jurusan::all(); 
        return view('matakuliah.create', compact('jurusans'));
    }

    public function store(Request $request) {
        $request->validate(['nama_matakuliah' => 'required', 'sks' => 'required', 'id_jurusan' => 'required']);
        Matakuliah::create($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil ditambah');
    }

    public function edit($id) {
        $matakuliah = Matakuliah::findOrFail($id);
        $jurusans = Jurusan::all();
        return view('matakuliah.edit', compact('matakuliah', 'jurusans'));
    }

    public function update(Request $request, $id) {
        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->update($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah diupdate');
    }

    public function destroy($id) {
        Matakuliah::destroy($id);
        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah dihapus');
    }
}
