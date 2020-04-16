<?php

namespace App\Http\Controllers;
use App\Singapura;
use Illuminate\Http\Request;

use App\Http\Requests;

class JapanController extends Controller
{
    public function index()
	{
    	$japans = Japan::orderBy('periode','desc')->paginate(5);

    	return view('japans.index', compact('japans'));
	}
	public function create()
	{
		return view('japans.create');
	}

	public function store(Request $request, Japan $japan)
	{
        Japan::create($request->all());

        $japans = Japan::orderBy('periode','desc')->paginate(5);

        return view('japans.index', compact('japans'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $japans = Japan::find($id);

        return view('japans.show', compact('japans'));
    }

    public function edit($id)
    {
        $japans = Japan::find($id);

        return view('japans.edit', compact('japans'));
    }

    public function update($id, Request $request)
    {
        $japan = Japan::findOrFail($id);

        $input = $request->all();

        $japan->fill($input)->save();

        $japans = Japan::all();
        
        $japans = Japan::orderBy('periode','desc')->paginate(5);

        return view('japans.index', compact('japans'));
    }

    public function delete($id)
    {
        Japan::find($id)->delete();

        return back();
    }
}
