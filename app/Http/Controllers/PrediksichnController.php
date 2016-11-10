<?php

namespace App\Http\Controllers;

use App\Prediksichn;
use Illuminate\Http\Request;

use App\Http\Requests;

class PrediksichnController extends Controller
{
    public function index()
	{
    	$prediksichns = Prediksichn::orderBy('tanggal','desc')->paginate(5);

    	return view('prediksichns.index', compact('prediksichns'));
	}
	public function create()
	{
		return view('prediksichns.create');
	}

	public function store(Request $request, Prediksichn $prediksichn)
	{
        Prediksichn::create($request->all());

        $prediksichns = Prediksichn::orderBy('tanggal','desc')->paginate(5);

        return view('prediksichns.index', compact('prediksichns'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $prediksichns = Prediksichn::find($id);

        return view('prediksichns.show', compact('prediksichns'));
    }

    public function edit($id)
    {
        $prediksichns = Prediksichn::find($id);

        return view('prediksichns.edit', compact('prediksichns'));
    }

    public function update($id, Request $request)
    {
        $prediksichn = Prediksichn::findOrFail($id);

        $input = $request->all();

        $prediksichn->fill($input)->save();

        $prediksichns = Prediksichn::all();

        return view('prediksichns.index', compact('prediksichns'));
    }

    public function delete($id)
    {
        China::find($id)->delete();

        return back();
    }
}
