<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use App\Models\Budgeting;
// use Database\Seeders\budgetingsseeder;
use Illuminate\Http\Request;

class QuickCountController extends Controller
{
    public function index()
    {
        // $dtdc = dtdc::all();
        return view('quickcount.index');
    }

    public function create()
    {
        return view('quickcount.create');
    }

    public function store(Request $request)
    {
        //debug dummy dd($request->all());
        $data = $request->all();
        $quickcount = QuickCount::create($data);
        return redirect()->route('quickcount.index');
    }

    public function delete($id)
    {
        $quickcount = QuickCount::find($id);
        $quickcount->delete();
        return redirect()->route('quickcount.index');
    }

    public function edit($id)
    {
        $quickcount = QuickCount::find($id);
        return view('quickcount.edit', compact('quickcount'));
    }

    public function update($id, Request $request)
    {

        $data = $request->all();
        $quickcount = QuickCount::find($id);
        $quickcount->update($data);
        return redirect()->route('quickcount.index');
    }
}
