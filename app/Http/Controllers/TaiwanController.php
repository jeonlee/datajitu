<?php

namespace App\Http\Controllers;
use App\Taiwan;
use Illuminate\Http\Request;

use App\Http\Requests;

class TaiwanController extends Controller
{
    public function index()
	{
    	$taiwans = Taiwan::orderBy('periode','desc')->paginate(5);

    	return view('taiwans.index', compact('taiwans'));
	}
	public function create()
	{
		return view('taiwans.create');
	}

	public function store(Request $request, Taiwan $taiwan)
	{
        Taiwan::create($request->all());

        $taiwans = Taiwan::orderBy('periode','desc')->paginate(5);

        return view('taiwans.index', compact('taiwans'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $taiwans = Taiwan::find($id);

        return view('taiwans.show', compact('taiwans'));
    }

    public function edit($id)
    {
        $taiwans = Taiwan::find($id);

        return view('taiwans.edit', compact('taiwans'));
    }

    public function update($id, Request $request)
    {
        $taiwan = Taiwan::findOrFail($id);

        $input = $request->all();

        $taiwan->fill($input)->save();

        $taiwans = Taiwan::all();

        return view('taiwans.index', compact('taiwans'));
    }

    public function delete($id)
    {
        Taiwan::find($id)->delete();

        return back();
    }
}
