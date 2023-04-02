<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\issue_aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = issue_aspirasi::where('jenis', 'aspirasi')->get();
        return view('aspirasi.index', compact('aspirasi'));
    }

    public function create()
    {
        return view('aspirasi.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $aspirasi = issue_aspirasi::create($data);
        return redirect()->route('aspirasi.index');
    }
    public function edit($id)
    {
        $aspirasi = issue_aspirasi::find($id);
        return view('aspirasi.edit', compact('aspirasi'));
    }

    public function delete($id)
    {
        $aspirasi = issue_aspirasi::find($id);
        $aspirasi->delete();
        return redirect()->route('aspirasi.index');
    }

    public function update($id, Request $request)
    {

        $data = $request->all();
        $aspirasi = issue_aspirasi::find($id);
        $aspirasi->update($data);
        return redirect()->route('aspirasi.index');
    }
}
