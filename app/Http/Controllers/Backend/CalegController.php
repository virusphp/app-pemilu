<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use App\Models\Budgeting;
// use Database\Seeders\budgetingsseeder;
use Illuminate\Http\Request;

class CalegController extends Controller
{
    public function index()
    {
        // $caleg = Caleg::all();
        return view('caleg.index');
    }

    public function create()
    {
        return view('caleg.create');
    }

    public function store(Request $request)
    {
        //debug dummy dd($request->all());
        $data = $request->all();
        $caleg = caleg::create($data);
        return redirect()->route('caleg.index');
    }

    public function delete($id)
    {
        $caleg = caleg::find($id);
        $caleg->delete();
        return redirect()->route('caleg.index');
    }

    public function edit($id)
    {
        $caleg = caleg::find($id);
        return view('caleg.edit', compact('caleg'));
    }

    public function update($id, Request $request)
    {

        $data = $request->all();
        $caleg = caleg::find($id);
        $caleg->update($data);
        return redirect()->route('caleg.index');
    }
}
