<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        return view('aspirasi.index');
    }

    public function create()
    {
        return view('aspirasi.create');
    }
}
