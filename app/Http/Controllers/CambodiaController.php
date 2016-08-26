<?php

namespace App\Http\Controllers;
use App\Cambodia;
use Illuminate\Http\Request;

use App\Http\Requests;

class CambodiaController extends Controller
{
    public function index()
	{
    	$cambodias = Cambodia::orderBy('periode','desc')->paginate(5);

    	return view('cambodias.index', compact('cambodias'));
	}
	public function create()
	{
		return view('cambodias.create');
	}

	public function store(Request $request, Cambodia $cambodia)
	{
        Cambodia::create($request->all());

        $cambodias = Cambodia::orderBy('periode','desc')->paginate(5);

        return view('cambodias.index', compact('cambodias'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $cambodias = Cambodia::find($id);

        return view('cambodias.show', compact('cambodias'));
    }

    public function edit($id)
    {
        $cambodias = Cambodia::find($id);

        return view('cambodias.edit', compact('cambodias'));
    }

    public function update($id, Request $request)
    {
        $cambodia = Cambodia::findOrFail($id);

        $input = $request->all();

        $cambodia->fill($input)->save();

        $cambodias = Cambodia::all();
        
        $cambodias = Cambodia::orderBy('periode','desc')->paginate(5);

        return view('cambodias.index', compact('cambodias'));
    }

    public function delete($id)
    {
        Cambodia::find($id)->delete();

        return back();
    }
}
