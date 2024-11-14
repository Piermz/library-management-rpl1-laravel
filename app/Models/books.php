<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
        'judul',
        'penulis',
        'kategori',
        'tahun_terbit',
        'jumlah_stok',
        'status',
        'deskripsi',
    ];

    protected $casts = [
        'tahun_terbit' => 'date',
    ];
}
