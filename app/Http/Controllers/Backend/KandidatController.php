<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use App\Models\Budgeting;
// use Database\Seeders\budgetingsseeder;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function index()
    {
        // $kandidat = kandidat::all();
        return view('kandidat.index');
    }

    public function create()
    {
        return view('kandidat.create');
    }

    public function store(Request $request)
    {
        //debug dummy dd($request->all());
        $data = $request->all();
        $kandidat = kandidat::create($data);
        return redirect()->route('kandidat.index');
    }

    public function delete($id)
    {
        $kandidat = kandidat::find($id);
        $kandidat->delete();
        return redirect()->route('kandidat.index');
    }

    public function edit($id)
    {
        $kandidat = kandidat::find($id);
        return view('kandidat.edit', compact('kandidat'));
    }

    public function update($id, Request $request)
    {

        $data = $request->all();
        $kandidat = kandidat::find($id);
        $kandidat->update($data);
        return redirect()->route('kandidat.index');
    }
}
