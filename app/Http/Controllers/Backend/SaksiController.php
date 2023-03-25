<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaksiController extends Controller
{
    public function index()
    {
        return view('saksi.index');
    }

    public function create()
    {
        return view('saksi.create');
    }
}
