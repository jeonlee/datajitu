<?php

namespace App\Http\Controllers;
use App\Singapura;
use Illuminate\Http\Request;

use App\Http\Requests;

class SingapuraController extends Controller
{
    public function index()
	{
    	$singapuras = Singapura::orderBy('periode','desc')->paginate(5);

    	return view('singapuras.index', compact('singapuras'));
	}
	public function create()
	{
		return view('singapuras.create');
	}

	public function store(Request $request, Singapura $singapura)
	{
        Singapura::create($request->all());

        $singapuras = Singapura::orderBy('periode','desc')->paginate(5);

        return view('singapuras.index', compact('singapuras'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $singapuras = Singapura::find($id);

        return view('singapuras.show', compact('singapuras'));
    }

    public function edit($id)
    {
        $singapuras = Singapura::find($id);

        return view('singapuras.edit', compact('singapuras'));
    }

    public function update($id, Request $request)
    {
        $singapura = Singapura::findOrFail($id);

        $input = $request->all();

        $singapura->fill($input)->save();

        $singapuras = Singapura::all();

        return view('singapuras.index', compact('singapuras'));
    }

    public function delete($id)
    {
        Singapura::find($id)->delete();

        return back();
    }
}
