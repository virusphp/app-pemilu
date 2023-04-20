<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dpt extends Model
{
    use HasFactory;
    protected $fillable = [
        'nkk',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'kawin',
        'jns_kel',
        'alamat',
        'rt',
        'rw',
        'difabel',
        'tps',
    ];
}
