<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimSukses extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap', 
        'nik', 
        'alamat', 
        'no_hp', 
        'area',
        'jenis_tugas'
    ];

    public function scopeKoordinator($query)
    {
        return $query->where('jenis_tugas', '=', 'koordinator');
    }

    public function scopeRelawan($query)
    {
        return $query->where('jenis_tugas', '=', 'relawan');
    }

    public function scopeSaksi($query)
    {
        return $query->where('jenis_tugas', '=', 'saksi');
    }
}
