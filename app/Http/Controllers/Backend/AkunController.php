<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use App\Models\Budgeting;
// use Database\Seeders\budgetingsseeder;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index()
    {
        // $akun = akun::all();
        return view('akun.index');
    }

    public function create()
    {
        return view('akun.create');
    }

    public function store(Request $request)
    {
        //debug dummy dd($request->all());
        $data = $request->all();
        $akun = Akun::create($data);
        return redirect()->route('akun.index');
    }

    public function delete($id)
    {
        $akun = Akun::find($id);
        $akun->delete();
        return redirect()->route('akun.index');
    }

    public function edit($id)
    {
        $akun = Akun::find($id);
        return view('akun.edit', compact('akun'));
    }

    public function update($id, Request $request)
    {

        $data = $request->all();
        $akun = Akun::find($id);
        $akun->update($data);
        return redirect()->route('akun.index');
    }
}
