<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendukungController extends Controller
{
    public function index()
    {
        return view('pendukung.index');
    }

    public function create()
    {
        return view('pendukung.create');
    }
}
