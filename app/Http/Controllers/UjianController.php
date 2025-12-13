<?php

namespace App\Http\Controllers;

use App\Models\ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ujians = Ujian::all();
        return view('ujian.index', compact('ujians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ujian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ujian::create([
            'nama_ujian' => $request->nama_ujian,
            'mapel' => $request->mapel,
            'kelas' => $request->kelas,
            'deskripsi' => $request->deskripsi,
            'acak_soal' => $request->has('acak_soal'),
            'acak_jawaban' => $request->has('acak_jawaban'),
            'tampilkan_hasil' => $request->has('tampilkan_hasil'),
        ]);

        return redirect()->route('ujian.index')->with('success', 'Ujian berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ujian $ujian)
    {
        return view('ujian.show', compact('ujians'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ujian $ujian)
    {
        return view('ujian.edit', compact('ujians'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ujian $ujian)
    {
          $ujian->update([
            'nama_ujian' => $request->nama_ujian,
            'mapel' => $request->mapel,
            'kelas' => $request->kelas,
            'deskripsi' => $request->deskripsi,
            'acak_soal' => $request->has('acak_soal'),
            'acak_jawaban' => $request->has('acak_jawaban'),
            'tampilkan_hasil' => $request->has('tampilkan_hasil'),
        ]);

        

        return redirect()->route('ujian.index')->with('success', 'Ujian berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ujian $ujian)
    {
        $ujian->delete();
    }
}
