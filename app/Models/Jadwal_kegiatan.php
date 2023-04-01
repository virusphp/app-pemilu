<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal_kegiatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'tgl_kegiatan',
        'jam_kegiatan',
        'nama_kegiatan',
        'tempat_kegiatan',
        'jenis_kegiatan',
        'visibilitas',
    ];
}
