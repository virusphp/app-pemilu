<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\issue_aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = issue_aspirasi::all();
        return view('aspirasi.index', compact('aspirasi'));
    }

    public function create()
    {
        return view('aspirasi.create');
    }
}
