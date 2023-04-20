<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Jadwal_kegiatan;
use App\Models\Budgeting;
use App\Models\Dpt;
// use App\Models\Pendukung;
// use App\Models\Koordinator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $hariini = Carbon::now()->toDateString();
        // dd($hariini);
        $jadwal_kegiatan = jadwal_kegiatan::whereDate('tgl_kegiatan', '>', $hariini)->get()->take(3);
        // $pendukung = Pendukung::all()->count();
        // $koordinator = Koordinator::all()->count();

        $dpt = Dpt::all()->count();
        $budget = Budgeting::where('status', '=', '1')->sum('nominal');

        $sekarang = Carbon::now();
        $pemilu = Carbon::parse('2024-02-14');
        $diff = $sekarang->diffInDays($pemilu);


        return view('dashboard', compact('jadwal_kegiatan', 'budget', 'diff', 'dpt'));
    }
}
