<?php

namespace App\Http\Controllers;

use App\Models\soal;
use App\Models\ujian;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soals = Soal::all();

        return view('soal.index', compact('soals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Ujian $ujian)
    {
        return view('soal.create', compact('ujian'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Ujian $ujian)
    {
        $data = $request->validate([
            'pertanyaan' => 'required',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'jawaban_benar' => 'required',
        ]);

        $data['ujians_id'] = $ujian->id;
        Soal::create($data);

        return redirect()->route('ujian.show', $ujian)->with('success', 'Soal berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(soal $soal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(soal $soal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, soal $soal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(soal $soal)
    {
        //
    }
}
