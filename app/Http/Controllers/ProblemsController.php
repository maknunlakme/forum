<?php

namespace App\Http\Controllers;

use App\Problem;

class ProblemsController extends Controller
{
    public function index()
    {
    	$problems = Problem::all();

    	return view('problems.index',compact('problems'));
    }
}
