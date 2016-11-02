<?php

namespace App\Http\Controllers;
use App\China;
use App\Analisiscn;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnalisiscnController extends Controller
{
    public function index()
	{
    	$china = China::all()->last();

        $chinas = China::orderBy('periode','desc')->get();

        $collection = collect($chinas);

    	return view('analisiss.index', compact('china','chinas'));

	}
	public function create()
	{
		return view('analisiss.create');
	}

	public function store(Request $request, china $china)
	{
        China::create($request->all());

        $chinas = China::orderBy('periode','desc')->paginate(5);

        return view('analisiss.index', compact('chinas'));
	}
	public function show($id)
    {
        $china = China::find($id);
        $satu = substr("$china->number",0,1);
        $dua = substr("$china->number",1,1);
        $tiga = substr("$china->number",2,1);
        $empat = substr("$china->number",3,1);
        $asgg = $satu % 2;
        $kopgg = $dua % 2;
        $kepalagg = $tiga % 2;
        $ekorgg = $empat % 2;
        $dg = 0;
        $tigash = substr("$china->number",2,1) % 2;
        $sh = 0;
        $tt = substr("$china->number",2,2);
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
        $chinas = China::find($id);

        return view('index.showanalisiscn', compact('chinas','satu','dua','tiga','empat','china','tigash','sh','tt','dasarbk'
            ,'dasarbk3','dasarbk4','dasarbk5','dasargg','dasargg3','dasargg4','dasargg5','dasargg1'));
    }

    public function edit($id)
    {
        $chinas = China::find($id);

        return view('analisiss.edit', compact('chinas'));
    }

    public function update($id, Request $request)
    {
        $china = China::findOrFail($id);

        $input = $request->all();

        $china->fill($input)->save();

        $chinas = China::orderBy('periode','desc')->paginate(5);

        return view('analisiss.index', compact('chinas'));
    }

    public function delete($id)
    {
        China::find($id)->delete();

        return back();
    }
}
