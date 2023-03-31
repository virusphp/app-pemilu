<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TimSukses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KoordinatorController extends Controller
{
    public function index()
    {
        $koordinators = TimSukses::koordinator()->latest()->simplePaginate(5);
        return view('koordinator.index', compact('koordinators'));
    }

    public function create()
    {
        return view('koordinator.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $timsukses = TimSukses::create($data);
        if ($timsukses) {
            Session::flash('data', ['type' => 'success', 'message' => 'Berhasil menambah koordinator']);
            return redirect()->route('koordinator.index');
        } else {
            Session::flash('data', ['type' => 'error', 'message' => 'Gagal menambah data, ada kesalahan server!']);
            return redirect()->route('koordinator.index');
        }
    }

    public function edit($id)
    {
        $timsukses = TimSukses::find($id);
        return view('koordinator.edit', compact('timsukses'));
    }

    public function update($id, Request $request)
    {
        dd($request->all());
        $data = $request->except('nik');
        $timsukses = TimSukses::find($id);
        $timsukses->update($data);
        return redirect()->route('koordinator.index');
    }
}
