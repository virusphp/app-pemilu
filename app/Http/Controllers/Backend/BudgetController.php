<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Budgeting;
use Database\Seeders\budgetingsseeder;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index()
    {
        $budget = Budgeting::all();
        return view('budget.index', compact('budget'));
    }

    public function create()
    {
        return view('budget.create');
    }

    public function store(Request $request)
    {
        //debug dummy dd($request->all());
        $data = $request->all();
        $budget = Budgeting::create($data);
        return redirect()->route('budget.index');
    }

    public function delete($id)
    {
        $budget = Budgeting::find($id);
        $budget->delete();
        return redirect()->route('budget.index');
    }

    public function edit($id)
    {
        $budget = Budgeting::find($id);
        return view('budget.edit', compact('budget'));
    }

    public function update($id, Request $request)
    {

        $data = $request->all();
        $budget = Budgeting::find($id);
        $budget->update($data);
        return redirect()->route('budget.index');
    }
}
