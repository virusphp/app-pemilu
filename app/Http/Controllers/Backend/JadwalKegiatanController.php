<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalKegiatanController extends Controller
{
    public function index()
    {
        return view('jadwal_kegiatan.index');
    }

    public function create()
    {
        return view('jadwal_kegiatan.create');
    }
}
