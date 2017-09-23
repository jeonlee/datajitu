<?php

namespace App\Http\Controllers;
use App\Sydney;
use App\Analisissyd;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnalisissydController extends Controller
{
    public function index()
	{
    	$sydney = Sydney::all()->last();

        $sydneys = Sydney::orderBy('periode','desc')->get();

        $collection = collect($sydneys);

    	return view('analisiss.index', compact('sydney','sydneys'));

	}
	public function create()
	{
		return view('analisiss.create');
	}

	public function store(Request $request, sydney $sydney)
	{
        Sydney::create($request->all());

        $sydneys = Sydney::orderBy('periode','desc')->paginate(5);

        return view('analisiss.index', compact('sydneys'));
	}
	public function show($id)
    {
        $sydney = Sydney::find($id);
        $satu = substr("$sydney->number",0,1);
        $dua = substr("$sydney->number",1,1);
        $tiga = substr("$sydney->number",2,1);
        $empat = substr("$sydney->number",3,1);
        $asgg = $satu % 2;
        $kopgg = $dua % 2;
        $kepalagg = $tiga % 2;
        $ekorgg = $empat % 2;
        $dg = 0;
        $tigash = substr("$sydney->number",2,1) % 2;
	$empatsh = substr("$sydney->number",3,1) % 2;
        $sh = 0;
	$hs = 0;
        $tt = substr("$sydney->number",2,2);
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
        $sydneys = Sydney::find($id);

        return view('index.showanalisissyd', compact('sydneys','satu','dua','tiga','empat','sydney','tigash','empatsh','hs','sh','tt','dasarbk'
            ,'dasarbk3','dasarbk4','dasarbk5','dasargg','dasargg3','dasargg4','dasargg5','dasargg1'));
    }

    public function edit($id)
    {
        $sydneys = Sydney::find($id);

        return view('analisiss.edit', compact('sydneys'));
    }

    public function update($id, Request $request)
    {
        $sydney = Sydney::findOrFail($id);

        $input = $request->all();

        $sydney->fill($input)->save();

        $sydneys = Sydney::orderBy('periode','desc')->paginate(5);

        return view('analisiss.index', compact('sydneys'));
    }

    public function delete($id)
    {
        Sydney::find($id)->delete();

        return back();
    }
}
