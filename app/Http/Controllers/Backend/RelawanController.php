<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RelawanController extends Controller
{
    public function index()
    {
        return view('relawan.index');
    }

    public function create()
    {
        return view('relawan.create');
    }
}
