<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KoordinatorController extends Controller
{
    public function index()
    {
        return view('koordinator.index');
    }

    public function create()
    {
        return view('koordinator.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
    }
}
