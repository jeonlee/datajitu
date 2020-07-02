<?php

namespace App\Http\Controllers;
use App\Hongkong;
use App\Analisishk;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnalisishkController extends Controller
{
    public function index()
	{
    	$hongkong = Hongkong::all()->last();

        $hongkongs = Hongkong::orderBy('periode','desc')->get();

        $collection = collect($hongkongs);

    	return view('analisiss.index', compact('hongkong','hongkongs'));

	}
	public function create()
	{
		return view('analisiss.create');
	}

	public function store(Request $request, hongkong $hongkong)
	{
        Hongkong::create($request->all());

        $hongkongs = Hongkong::orderBy('periode','desc')->paginate(5);

        return view('analisiss.index', compact('hongkongs'));
	}
	public function show($id)
    {
        $hongkong = Hongkong::find($id);
        $satu = substr("$hongkong->number",0,1);
        $dua = substr("$hongkong->number",1,1);
        $tiga = substr("$hongkong->number",2,1);
        $empat = substr("$hongkong->number",3,1);
        $asgg = $satu % 2;
        $kopgg = $dua % 2;
        $kepalagg = $tiga % 2;
        $ekorgg = $empat % 2;
        $dg = 0;
        $tigash = substr("$hongkong->number",2,1) % 2;
	$empatsh = substr("$hongkong->number",3,1) % 2;
        $sh = 0;
	$hs = 0;
        $tt = substr("$hongkong->number",2,2);
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
        $hongkongs = Hongkong::find($id);

        return view('index.showanalisishk', compact('hongkongs','satu','dua','tiga','empat','hongkong','tigash','empatsh','hs','sh','tt','dasarbk'
            ,'dasarbk3','dasarbk4','dasarbk5','dasargg','dasargg3','dasargg4','dasargg5','dasargg1'));
    }

    public function edit($id)
    {
        $hongkongs = Hongkong::find($id);

        return view('analisiss.edit', compact('hongkongs'));
    }

    public function update($id, Request $request)
    {
        $hongkong = Hongkong::findOrFail($id);

        $input = $request->all();

        $hongkong->fill($input)->save();

        $hongkongs = Hongkong::orderBy('periode','desc')->paginate(5);

        return view('analisiss.index', compact('hongkongs'));
    }

    public function delete($id)
    {
        Hongkong::find($id)->delete();

        return back();
    }
}
