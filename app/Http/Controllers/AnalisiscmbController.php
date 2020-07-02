<?php

namespace App\Http\Controllers;
use App\Cambodia;
use App\Analisiscmb;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnalisiscmbController extends Controller
{
    public function index()
	{
    	$cambodia = Cambodia::all()->last();

        $cambodias = Cambodia::orderBy('periode','desc')->get();

        $collection = collect($cambodias);

    	return view('analisiss.index', compact('cambodia','cambodias'));

	}
	public function create()
	{
		return view('analisiss.create');
	}

	public function store(Request $request, cambodia $cambodia)
	{
        Cambodia::create($request->all());

        $cambodias = Cambodia::orderBy('periode','desc')->paginate(5);

        return view('analisiss.index', compact('cambodias'));
	}
	public function show($id)
    {
        $cambodia = Cambodia::find($id);
        $satu = substr("$cambodia->number",0,1);
        $dua = substr("$cambodia->number",1,1);
        $tiga = substr("$cambodia->number",2,1);
        $empat = substr("$cambodia->number",3,1);
        $asgg = $satu % 2;
        $kopgg = $dua % 2;
        $kepalagg = $tiga % 2;
        $ekorgg = $empat % 2;
        $dg = 0;
        $tigash = substr("$cambodia->number",2,1) % 2;
	$empatsh = substr("$cambodia->number",3,1) % 2;
        $sh = 0;
	$hs = 0;
        $tt = substr("$cambodia->number",2,2);
        $dasarbk = $tiga + $empat;
        $dasarbk3 = substr("$dasarbk",0,1);
        $dasarbk4 = substr("$dasarbk",1,1);
	if($dasarbk4==''){
	    $dasarbk4=0;
   	}
        $dasarbk5 = $dasarbk3 + $dasarbk4;
        $dasargg = $tiga + $empat;
        $dasargg3 = substr("$dasargg",0,1);
        $dasargg4 = substr("$dasargg",1,1);
	if($dasargg4==''){
	    $dasargg4=0;
   	}
        $dasargg5 = $dasargg3 + $dasargg4;
        $dasargg1 = $dasargg5 % 2;
        // $categories = Category::find($id);
        $cambodias = Cambodia::find($id);

        return view('index.showanalisiscmb', compact('cambodias','satu','dua','tiga','empat','cambodia','tigash','empatsh','hs','sh','tt','dasarbk'
            ,'dasarbk3','dasarbk4','dasarbk5','dasargg','dasargg3','dasargg4','dasargg5','dasargg1'));
    }

    public function edit($id)
    {
        $cambodias = Cambodia::find($id);

        return view('analisiss.edit', compact('cambodias'));
    }

    public function update($id, Request $request)
    {
        $cambodia = Cambodia::findOrFail($id);

        $input = $request->all();

        $cambodia->fill($input)->save();

        $cambodias = Cambodia::orderBy('periode','desc')->paginate(5);

        return view('analisiss.index', compact('cambodias'));
    }

    public function delete($id)
    {
        Cambodia::find($id)->delete();

        return back();
    }
}
