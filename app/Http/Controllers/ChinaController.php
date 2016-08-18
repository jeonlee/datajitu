<?php

namespace App\Http\Controllers;
use App\China;
use Illuminate\Http\Request;

use App\Http\Requests;

class ChinaController extends Controller
{
    public function index()
	{
    	$chinas = China::orderBy('periode','desc')->paginate(5);

    	return view('chinas.index', compact('chinas'));
	}
	public function create()
	{
		return view('chinas.create');
	}

	public function store(Request $request, China $china)
	{
        China::create($request->all());

        $chinas = China::orderBy('periode','desc')->paginate(5);

        return view('chinas.index', compact('chinas'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $chinas = China::find($id);

        return view('chinas.show', compact('chinas'));
    }

    public function edit($id)
    {
        $chinas = China::find($id);

        return view('chinas.edit', compact('chinas'));
    }

    public function update($id, Request $request)
    {
        $china = China::findOrFail($id);

        $input = $request->all();

        $china->fill($input)->save();

        $chinas = China::all();

        return view('chinas.index', compact('chinas'));
    }

    public function delete($id)
    {
        China::find($id)->delete();

        return back();
    }
}
