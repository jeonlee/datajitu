<?php

namespace App\Http\Controllers;
use App\Japan;
use App\Analisisjpn;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnalisisjpnController extends Controller
{
    public function index()
    {
        $japan = Japan::all()->last();

        $japans = Japan::orderBy('periode','desc')->get();

        $collection = collect($japans);

        return view('analisiss.index', compact('japan','japans'));

    }
    public function create()
    {
        return view('analisiss.create');
    }

    public function store(Request $request, japan $japan)
    {
        Japan::create($request->all());

        $japans = Japan::orderBy('periode','desc')->paginate(5);

        return view('analisiss.index', compact('japans'));
    }
    public function show($id)
    {
        $japan = Japan::find($id);
        $satu = substr("$japan->number",0,1);
        $dua = substr("$japan->number",1,1);
        $tiga = substr("$japan->number",2,1);
        $empat = substr("$japan->number",3,1);
        $asgg = $satu % 2;
        $kopgg = $dua % 2;
        $kepalagg = $tiga % 2;
        $ekorgg = $empat % 2;
        $dg = 0;
        $tigash = substr("$japan->number",2,1) % 2;
        $empatsh = substr("$japan->number",3,1) % 2;
        $sh = 0;
        $hs = 0;
        $tt = substr("$japan->number",2,2);
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
        $japans = Japan::find($id);

        return view('index.showanalisisjpn', compact('japans','satu','dua','tiga','empat','japan','tigash','empatsh','hs','sh','tt','dasarbk'
            ,'dasarbk3','dasarbk4','dasarbk5','dasargg','dasargg3','dasargg4','dasargg5','dasargg1'));
    }

    public function edit($id)
    {
        $japans = Japan::find($id);

        return view('analisiss.edit', compact('japans'));
    }

    public function update($id, Request $request)
    {
        $japan = Japan::findOrFail($id);

        $input = $request->all();

        $japan->fill($input)->save();

        $japans = Japan::orderBy('periode','desc')->paginate(5);

        return view('analisiss.index', compact('japans'));
    }

    public function delete($id)
    {
        Japan::find($id)->delete();

        return back();
    }
}
