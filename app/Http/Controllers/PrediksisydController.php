<?php

namespace App\Http\Controllers;

use App\Prediksisyd;
use Illuminate\Http\Request;

use App\Http\Requests;

class PrediksisydController extends Controller
{
    public function index()
	{
    	$prediksisyds = Prediksisyd::orderBy('tanggal','desc')->paginate(5);

    	return view('prediksisyds.index', compact('prediksisyds'));
	}
	public function create()
	{
		return view('prediksisyds.create');
	}

	public function store(Request $request, Prediksisyd $prediksisyd)
	{
        Prediksisyd::create($request->all());

        $prediksisyds = Prediksisyd::orderBy('tanggal','desc')->paginate(5);

        return view('prediksisyds.index', compact('prediksisyds'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $prediksisyds = Prediksisyd::find($id);

        return view('prediksisyds.show', compact('prediksisyds'));
    }

    public function edit($id)
    {
        $prediksisyds = Prediksisyd::find($id);

        return view('prediksisyds.edit', compact('prediksisyds'));
    }

    public function update($id, Request $request)
    {
        $prediksisyd = Prediksisyd::findOrFail($id);

        $input = $request->all();

        $prediksisyd->fill($input)->save();

        $prediksisyds = Prediksisyd::all();

        return view('prediksisyds.index', compact('prediksisyds'));
    }

    public function delete($id)
    {
        Prediksisyd::find($id)->delete();

        return back();
    }
}
