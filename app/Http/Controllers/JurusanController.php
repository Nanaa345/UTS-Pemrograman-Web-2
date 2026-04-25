<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller {
    public function index() {
        $jurusans = Jurusan::all();
        return view('jurusan.index', compact('jurusans'));
    }

    public function create() {
        return view('jurusan.create');
    }

    public function store(Request $request) {
        $request->validate(['nama_jurusan' => 'required', 'akreditasi' => 'required']);
        Jurusan::create($request->all());
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil ditambah');
    }

    public function edit($id) {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, $id) {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update($request->all());
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil diupdate');
    }

    public function destroy($id) {
        Jurusan::destroy($id);
        return redirect()->route('jurusan.index')->with('success', 'Jurusan dihapus');
    }
}