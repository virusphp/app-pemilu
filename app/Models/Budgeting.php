<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budgeting extends Model
{
    use HasFactory;
    protected $fillable = [
        'keperluan',
        'sumber',
        'wilayah',
        'nominal',
        'status',
    ];
}
