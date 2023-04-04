<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TimSukses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SaksiController extends Controller
{
    public function index()
    {
        $saksis = TimSukses::saksi()->latest()->simplePaginate(5);
        return view('saksi.index', compact('saksis'));
    }

    public function create()
    {
        return view('saksi.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $timsukses = TimSukses::create($data);
        if ($timsukses) {
            Session::flash('data', ['type' => 'success', 'message' => 'Berhasil menambah saksi']);
            return redirect()->route('saksi.index');
        } else {
            Session::flash('data', ['type' => 'error', 'message' => 'Gagal menambah data, ada kesalahan server!']);
            return redirect()->route('saksi.index');
        }
    }

    public function edit($id)
    {
        $timsukses = TimSukses::find($id);
        return view('saksi.edit', compact('timsukses'));
    }

    public function update($id, Request $request)
    {
        $data = $request->except('nik');
        $timsukses = TimSukses::find($id);
        $timsukses->update($data);
         if ($timsukses) {
            Session::flash('data', ['type' => 'success', 'message' => 'Berhasil mengubah saksi']);
            return redirect()->route('saksi.index');
        } else {
            Session::flash('data', ['type' => 'error', 'message' => 'Gagal mengubah data, ada kesalahan server!']);
            return redirect()->route('saksi.index');
        }
    }

    public function delete($id)
    {
        $timsukses = TimSukses::find($id);
        $timsukses->delete();
         if ($timsukses) {
            Session::flash('data', ['type' => 'success', 'message' => 'Berhasil menghapus saksi']);
            return redirect()->route('saksi.index');
        } else {
            Session::flash('data', ['type' => 'error', 'message' => 'Gagal menghapus data, ada kesalahan server!']);
            return redirect()->route('saksi.index');
        }
    }
}
