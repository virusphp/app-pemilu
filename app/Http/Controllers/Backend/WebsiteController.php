<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use App\Models\Budgeting;
// use Database\Seeders\budgetingsseeder;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        // $website = Website::all();
        return view('website.index');
    }

    public function create()
    {
        return view('website.create');
    }

    public function store(Request $request)
    {
        //debug dummy dd($request->all());
        $data = $request->all();
        $website = Website::create($data);
        return redirect()->route('website.index');
    }

    public function delete($id)
    {
        $website = Website::find($id);
        $website->delete();
        return redirect()->route('website.index');
    }

    public function edit($id)
    {
        $website = Website::find($id);
        return view('website.edit', compact('website'));
    }

    public function update($id, Request $request)
    {

        $data = $request->all();
        $website = Website::find($id);
        $website->update($data);
        return redirect()->route('website.index');
    }
}
