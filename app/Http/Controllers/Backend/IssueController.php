<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\issue_aspirasi;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function index()
    {
        $issue = issue_aspirasi::where('jenis', 'issue')->get();
        return view('issue.index', compact('issue'));
    }

    public function create()
    {
        return view('issue.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $issue = issue_aspirasi::create($data);
        return redirect()->route('issue.index');
    }
    public function edit($id)
    {
        $issue = issue_aspirasi::find($id);
        return view('issue.edit', compact('issue'));
    }

    public function delete($id)
    {
        $issue = issue_aspirasi::find($id);
        $issue->delete();
        return redirect()->route('issue.index');
    }

    public function update($id, Request $request)
    {

        $data = $request->all();
        $issue = issue_aspirasi::find($id);
        $issue->update($data);
        return redirect()->route('issue.index');
    }
}
