<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issue_aspirasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'detail',
        'sumber',
        'solusi',
        'wilayah',
        'jenis',
        'tanggal_pelaksanaan_solusi'
    ];
}
