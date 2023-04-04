<?php

namespace Database\Seeders;

use App\Models\TimSukses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimsuksesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TimSukses::create([
            'nama_lengkap' => 'Adi Monyong',
            'nik' => '33759449434',
            'alamat' => 'Jl kanfer 4 no 333',
            'no_hp' => '089383838393',
            'area' => 'slamaran',
            'jenis_tugas' => 'koordinator',

        ]);
    }
}
