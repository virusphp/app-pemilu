<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TimSukses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RelawanController extends Controller
{
    public function index()
    {
        $relawans = TimSukses::relawan()->latest()->simplePaginate(5);
        return view('relawan.index', compact('relawans'));
    }

    public function create()
    {
        return view('relawan.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $timsukses = TimSukses::create($data);
        if ($timsukses) {
            Session::flash('data', ['type' => 'success', 'message' => 'Berhasil menambah relawan']);
            return redirect()->route('relawan.index');
        } else {
            Session::flash('data', ['type' => 'error', 'message' => 'Gagal menambah data, ada kesalahan server!']);
            return redirect()->route('relawan.index');
        }
    }

    public function edit($id)
    {
        $timsukses = TimSukses::find($id);
        return view('relawan.edit', compact('timsukses'));
    }

    public function update($id, Request $request)
    {
        $data = $request->except('nik');
        $timsukses = TimSukses::find($id);
        $timsukses->update($data);
         if ($timsukses) {
            Session::flash('data', ['type' => 'success', 'message' => 'Berhasil mengubah relawan']);
            return redirect()->route('relawan.index');
        } else {
            Session::flash('data', ['type' => 'error', 'message' => 'Gagal mengubah data, ada kesalahan server!']);
            return redirect()->route('relawan.index');
        }
    }

    public function delete($id)
    {
        $timsukses = TimSukses::find($id);
        $timsukses->delete();
         if ($timsukses) {
            Session::flash('data', ['type' => 'success', 'message' => 'Berhasil menghapus relawan']);
            return redirect()->route('relawan.index');
        } else {
            Session::flash('data', ['type' => 'error', 'message' => 'Gagal menghapus data, ada kesalahan server!']);
            return redirect()->route('relawan.index');
        }
    }
}
