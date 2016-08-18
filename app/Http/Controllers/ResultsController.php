<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

use App\Http\Requests;

class ResultsController extends Controller
{
	public function index()
	{
    	$results = Result::all();

    	return view('results.index', compact('results'));
	}

	public function create()
	{
		return view('results.create');
	}

	public function store(Request $request, Result $result)
	{
        Result::create($request->all());

        $results = Result::all();

        return view('results.index', compact('results'));
	}
}
