<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Jadwal_kegiatan;
use Illuminate\Http\Request;

class JadwalKegiatanController extends Controller
{
    public function index()
    {
        $jadwal_kegiatan = jadwal_kegiatan::all();
        return view('jadwal_kegiatan.index', compact('jadwal_kegiatan'));
    }

    public function create()
    {
        return view('jadwal_kegiatan.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $jadwal_kegiatan = Jadwal_kegiatan::create($data);
        return redirect()->route('jadwal_kegiatan.index');
    }

    public function delete($id)
    {
        $jadwal_kegiatan = Jadwal_kegiatan::find($id);
        $jadwal_kegiatan->delete();
        return redirect()->route('jadwal_kegiatan.index');
    }

    public function edit($id)
    {
        $jadwal_kegiatan = Jadwal_kegiatan::find($id);
        return view('jadwal_kegiatan.edit', compact('jadwal_kegiatan'));
    }

    public function update($id, Request $request)
    {

        $data = $request->all();
        $jadwal_kegiatan = Jadwal_kegiatan::find($id);
        $jadwal_kegiatan->update($data);
        return redirect()->route('jadwal_kegiatan.index');
    }
}
