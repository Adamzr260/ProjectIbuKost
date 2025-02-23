<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::all();
        return view('kamar.index', compact('kamars'));
    }

    // Fungsi untuk menyimpan data kamar
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_penghuni' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'tagihan' => 'required|integer',
            'deskripsi' => 'nullable|string',
            'tanggal_sewa' => 'required|date',
        ]);

        // Simpan data kamar
        Kamar::create($request->all());

        // Redirect kembali ke halaman kamar
        return redirect()->route('kamar')->with('success', 'Data kamar berhasil disimpan!');
    }

    // Fungsi untuk menampilkan halaman kamar
    public function showKamar()
    {
        return view('kamar');
    }
}
