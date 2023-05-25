<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use App\Models\Budgeting;
// use Database\Seeders\budgetingsseeder;
use Illuminate\Http\Request;

class ParpolController extends Controller
{
    public function index()
    {
        // $parpol = parpol::all();
        return view('parpol.index');
    }

    public function create()
    {
        return view('parpol.create');
    }

    public function store(Request $request)
    {
        //debug dummy dd($request->all());
        $data = $request->all();
        $parpol = parpol::create($data);
        return redirect()->route('parpol.index');
    }

    public function delete($id)
    {
        $parpol = parpol::find($id);
        $parpol->delete();
        return redirect()->route('parpol.index');
    }

    public function edit($id)
    {
        $parpol = parpol::find($id);
        return view('parpol.edit', compact('parpol'));
    }

    public function update($id, Request $request)
    {

        $data = $request->all();
        $parpol = parpol::find($id);
        $parpol->update($data);
        return redirect()->route('parpol.index');
    }
}
