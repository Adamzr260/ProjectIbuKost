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

    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'nama_penghuni' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'tagihan' => 'required|integer',
            'deskripsi' => 'nullable|string',
            'tanggal_sewa' => 'required|date',
        ]);

    
        $kamar = new Kamar();
        $kamar->nama_penghuni = $request->nama_penghuni;
        $kamar->no_telp = $request->no_telp;
        $kamar->tagihan = $request->tagihan;
        $kamar->deskripsi = $request->deskripsi;
        $kamar->tanggal_sewa = $request->tanggal_sewa;
        $kamar->save();
        
        return redirect()->back()->with('success', 'Data kamar berhasil disimpan!');
    }
}

