<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function index()
    {
        return view('issue.index');
    }

    public function create()
    {
        return view('issue.create');
    }
}
