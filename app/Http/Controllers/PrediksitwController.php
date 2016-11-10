<?php

namespace App\Http\Controllers;

use App\Prediksitw;
use Illuminate\Http\Request;

use App\Http\Requests;

class PrediksitwController extends Controller
{
    public function index()
	{
    	$prediksitws = Prediksitw::orderBy('tanggal','desc')->paginate(5);

    	return view('prediksitws.index', compact('prediksitws'));
	}
	public function create()
	{
		return view('prediksitws.create');
	}

	public function store(Request $request, Prediksitw $prediksitw)
	{
        Prediksitw::create($request->all());

        $prediksitws = Prediksitw::orderBy('tanggal','desc')->paginate(5);

        return view('prediksitws.index', compact('prediksitws'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $prediksitws = Prediksitw::find($id);

        return view('prediksitws.show', compact('prediksitws'));
    }

    public function edit($id)
    {
        $prediksitws = Prediksitw::find($id);

        return view('prediksitws.edit', compact('prediksitws'));
    }

    public function update($id, Request $request)
    {
        $prediksitw = Prediksitw::findOrFail($id);

        $input = $request->all();

        $prediksitw->fill($input)->save();

        $prediksitws = Prediksitw::all();

        $prediksitws = Prediksitw::orderBy('tanggal','desc')->paginate(5);

        return view('prediksitws.index', compact('prediksitws'));
    }

    public function delete($id)
    {
        Prediksitw::find($id)->delete();

        return back();
    }
}
