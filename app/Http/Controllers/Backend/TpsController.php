<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use App\Models\Budgeting;
// use Database\Seeders\budgetingsseeder;
use Illuminate\Http\Request;

class TpsController extends Controller
{
    public function index()
    {
        // $tps = tps::all();
        return view('tps.index');
    }

    public function create()
    {
        return view('tps.create');
    }

    public function store(Request $request)
    {
        //debug dummy dd($request->all());
        $data = $request->all();
        $tps = tps::create($data);
        return redirect()->route('tps.index');
    }

    public function delete($id)
    {
        $tps = tps::find($id);
        $tps->delete();
        return redirect()->route('tps.index');
    }

    public function edit($id)
    {
        $tps = tps::find($id);
        return view('tps.edit', compact('tps'));
    }

    public function update($id, Request $request)
    {

        $data = $request->all();
        $tps = tps::find($id);
        $tps->update($data);
        return redirect()->route('tps.index');
    }
}
