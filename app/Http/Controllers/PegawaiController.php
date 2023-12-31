<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pindex', compact('pegawai'));
    }

    public function create()
    {
        return view('pcreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'posisi' => 'required',
            'gaji' => 'required',
            'tanggal_masuk' => 'required|date',
            'alamat' => 'required',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.pindex')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function edit(Pegawai $pegawai)
    {
        return view('pedit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nama' => 'required',
            'posisi' => 'required',
            'gaji' => 'required',
            'tanggal_masuk' => 'required|date',
            'alamat' => 'required',
        ]);

        $pegawai->update($request->all());

        return redirect()->route('pindex')->with('success', 'Pegawai berhasil diperbarui.');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect()->route('pindex')->with('success', 'Pegawai berhasil dihapus.');
    }
}

