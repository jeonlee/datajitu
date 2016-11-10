<?php

namespace App\Http\Controllers;

use App\Prediksihk;
use Illuminate\Http\Request;

use App\Http\Requests;

class PrediksihkController extends Controller
{
    public function index()
	{
    	$prediksihks = Prediksihk::orderBy('tanggal','desc')->paginate(5);

    	return view('prediksihks.index', compact('prediksihks'));
	}
	public function create()
	{
		return view('prediksihks.create');
	}

	public function store(Request $request, Prediksihk $prediksihk)
	{
        Prediksihk::create($request->all());

        $prediksihks = Prediksihk::orderBy('tanggal','desc')->paginate(5);

        return view('prediksihks.index', compact('prediksihks'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $prediksihks = Prediksihk::find($id);

        return view('prediksihks.show', compact('prediksihks'));
    }

    public function edit($id)
    {
        $prediksihks = Prediksihk::find($id);

        return view('prediksihks.edit', compact('prediksihks'));
    }

    public function update($id, Request $request)
    {
        $prediksihk = Prediksihk::findOrFail($id);

        $input = $request->all();

        $prediksihk->fill($input)->save();

        $prediksihks = Prediksihk::orderBy('tanggal','desc')->paginate(5);

        return view('prediksihks.index', compact('prediksihks'));
    }

    public function delete($id)
    {
        Prediksihk::find($id)->delete();

        return back();
    }
}
