<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use App\Models\Budgeting;
// use Database\Seeders\budgetingsseeder;
use Illuminate\Http\Request;

class DtdcController extends Controller
{
    public function index()
    {
        // $dtdc = dtdc::all();
        return view('dtdc.index');
    }

    public function create()
    {
        return view('dtdc.create');
    }

    public function store(Request $request)
    {
        //debug dummy dd($request->all());
        $data = $request->all();
        $dtdc = Dtdc::create($data);
        return redirect()->route('dtdc.index');
    }

    public function delete($id)
    {
        $dtdc = Dtdc::find($id);
        $dtdc->delete();
        return redirect()->route('dtdc.index');
    }

    public function edit($id)
    {
        $dtdc = Dtdc::find($id);
        return view('dtdc.edit', compact('dtdc'));
    }

    public function update($id, Request $request)
    {

        $data = $request->all();
        $dtdc = Dtdc::find($id);
        $dtdc->update($data);
        return redirect()->route('dtdc.index');
    }
}
