<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamars'; // Nama tabel di database

    protected $fillable = [
        'nama_penghuni',
        'no_telp',
        'tagihan',
        'deskripsi',
        'tanggal_sewa',
    ];
}
