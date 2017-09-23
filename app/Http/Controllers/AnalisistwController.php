<?php

namespace App\Http\Controllers;
use App\Taiwan;
use App\Analisistw;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnalisistwController extends Controller
{
    public function index()
	{
    	$taiwan = Taiwan::all()->last();

        $taiwans = Taiwan::orderBy('periode','desc')->get();

        $collection = collect($taiwans);

    	return view('analisiss.index', compact('taiwan','taiwans'));

	}
	public function create()
	{
		return view('analisiss.create');
	}

	public function store(Request $request, taiwan $taiwan)
	{
        Taiwan::create($request->all());

        $taiwans = Taiwan::orderBy('periode','desc')->paginate(5);

        return view('analisiss.index', compact('taiwans'));
	}
	public function show($id)
    {
        $taiwan = Taiwan::find($id);
        $satu = substr("$taiwan->number",0,1);
        $dua = substr("$taiwan->number",1,1);
        $tiga = substr("$taiwan->number",2,1);
        $empat = substr("$taiwan->number",3,1);
        $asgg = $satu % 2;
        $kopgg = $dua % 2;
        $kepalagg = $tiga % 2;
        $ekorgg = $empat % 2;
        $dg = 0;
        $tigash = substr("$taiwan->number",2,1) % 2;
	$empatsh = substr("$china->number",3,1) % 2;
        $sh = 0;
	$hs = 0;
        $tt = substr("$taiwan->number",2,2);
        $dasarbk = $tiga + $empat;
        $dasarbk3 = substr("$dasarbk",0,1);
        $dasarbk4 = substr("$dasarbk",1,1);
        $dasarbk5 = $dasarbk3 + $dasarbk4;
        $dasargg = $tiga + $empat;
        $dasargg3 = substr("$dasargg",0,1);
        $dasargg4 = substr("$dasargg",1,1);
        $dasargg5 = $dasargg3 + $dasargg4;
        $dasargg1 = $dasargg5 % 2;
        // $categories = Category::find($id);
        $taiwans = Taiwan::find($id);

        return view('index.showanalisistw', compact('taiwans','satu','dua','tiga','empat','taiwan','tigash','sh','tt','dasarbk'
            ,'dasarbk3','dasarbk4','dasarbk5','dasargg','dasargg3','dasargg4','dasargg5','dasargg1'));
    }

    public function edit($id)
    {
        $taiwans = Taiwan::find($id);

        return view('analisiss.edit', compact('taiwans'));
    }

    public function update($id, Request $request)
    {
        $taiwan = Taiwan::findOrFail($id);

        $input = $request->all();

        $taiwan->fill($input)->save();

        $taiwans = Taiwan::orderBy('periode','desc')->paginate(5);

        return view('analisiss.index', compact('taiwans'));
    }

    public function delete($id)
    {
        Taiwan::find($id)->delete();

        return back();
    }
}
