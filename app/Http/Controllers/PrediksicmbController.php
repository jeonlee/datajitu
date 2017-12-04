<?php

namespace App\Http\Controllers;

use App\Prediksicmb;
use Illuminate\Http\Request;

use App\Http\Requests;

class PrediksicmbController extends Controller
{
    public function index()
	{
    	$prediksicmbs = Prediksicmb::orderBy('tanggal','desc')->paginate(5);

    	return view('prediksicmbs.index', compact('prediksicmbs'));
	}
	public function create()
	{
		return view('prediksicmbs.create');
	}

	public function store(Request $request, Prediksicmb $prediksicmb)
	{
        Prediksicmb::create($request->all());

        $prediksicmbs = Prediksicmb::orderBy('tanggal','desc')->paginate(5);

        return view('prediksicmbs.index', compact('prediksicmbs'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $prediksicmbs = Prediksicmb::find($id);

        return view('prediksicmbs.show', compact('prediksicmbs'));
    }

    public function edit($id)
    {
        $prediksicmbs = Prediksicmb::find($id);

        return view('prediksicmbs.edit', compact('prediksicmbs'));
    }

    public function update($id, Request $request)
    {
        $prediksicmb = Prediksicmb::findOrFail($id);

        $input = $request->all();

        $prediksicmb->fill($input)->save();

        $prediksicmbs = Prediksicmb::all();

        return view('prediksicmbs.index', compact('prediksicmbs'));
    }

    public function delete($id)
    {
        Prediksicmb::find($id)->delete();

        return back();
    }
}
