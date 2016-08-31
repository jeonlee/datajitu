<?php

namespace App\Http\Controllers;
use App\Sydney;
use Illuminate\Http\Request;

use App\Http\Requests;

class SydneyController extends Controller
{
    public function index()
	{
    	$sydneys = Sydney::orderBy('tanggal','desc')->paginate(5);

    	return view('sydneys.index', compact('sydneys'));
	}
	public function create()
	{
		return view('sydneys.create');
	}

	public function store(Request $request, Sydney $sydney)
	{
        Sydney::create($request->all());

        $sydneys = Sydney::orderBy('periode','desc')->paginate(5);

        return view('sydneys.index', compact('sydneys'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $sydneys = Sydney::find($id);

        return view('sydneys.show', compact('sydneys'));
    }

    public function edit($id)
    {
        $sydneys = Sydney::find($id);

        return view('sydneys.edit', compact('sydneys'));
    }

    public function update($id, Request $request)
    {
        $sydney = Sydney::findOrFail($id);

        $input = $request->all();

        $sydney->fill($input)->save();

        $sydneys = Sydney::all();
        
        $sydneys = Sydney::orderBy('periode','desc')->paginate(5);

        return view('sydneys.index', compact('sydneys'));
    }

    public function delete($id)
    {
        Sydney::find($id)->delete();

        return back();
    }
}
