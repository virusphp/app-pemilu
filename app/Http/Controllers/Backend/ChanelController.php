<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use App\Models\Budgeting;
// use Database\Seeders\budgetingsseeder;
use Illuminate\Http\Request;

class ChanelController extends Controller
{
    public function index()
    {
        // $dtdc = dtdc::all();
        return view('chanel.index');
    }

    public function create()
    {
        return view('chanel.create');
    }

    public function store(Request $request)
    {
        //debug dummy dd($request->all());
        $data = $request->all();
        $chanel = Chanel::create($data);
        return redirect()->route('chanel.index');
    }

    public function delete($id)
    {
        $chanel = Chanel::find($id);
        $chanel->delete();
        return redirect()->route('chanel.index');
    }

    public function edit($id)
    {
        $chanel = Chanel::find($id);
        return view('chanel.edit', compact('chanel'));
    }

    public function update($id, Request $request)
    {

        $data = $request->all();
        $chanel = Chanel::find($id);
        $chanel->update($data);
        return redirect()->route('chanel.index');
    }
}
