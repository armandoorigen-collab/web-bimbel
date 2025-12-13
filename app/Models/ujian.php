<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ujian extends Model
{
     protected $fillable = [
        'nama_ujian',
        'mapel',
        'kelas',
        'deskripsi',
        'acak_soal',
        'acak_jawaban',
        'tampilkan_hasil'
    ];
}
