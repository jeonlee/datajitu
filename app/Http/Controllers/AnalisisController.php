<?php

namespace App\Http\Controllers;
use App\Singapura;
use App\Analisis;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnalisisController extends Controller
{
    public function index()
	{
    	$singapura = Singapura::all()->last();

        $singapuras = Singapura::orderBy('periode','desc')->get();

        $collection = collect($singapuras);

    	return view('analisiss.index', compact('singapura','singapuras'));

	}
	
	public function show($id)
    {
        $singapura = Singapura::find($id);
        $satu = substr("$singapura->number",0,1);
        $dua = substr("$singapura->number",1,1);
        $tiga = substr("$singapura->number",2,1);
        $empat = substr("$singapura->number",3,1);
        $asgg = $satu % 2;
        $kopgg = $dua % 2;
        $kepalagg = $tiga % 2;
        $ekorgg = $empat % 2;
        $dg = 0;
        $tigash = substr("$singapura->number",2,1) % 2;
	$empatsh = substr("$singapura->number",3,1) % 2;
        $sh = 0;
	$hs = 0;
        $tt = substr("$singapura->number",2,2);
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
        $singapuras = Singapura::find($id);

        return view('index.showanalisissgp', compact('singapuras','satu','dua','tiga','empat','singapura','tigash','empatsh','hs','sh','tt','dasarbk'
            ,'dasarbk3','dasarbk4','dasarbk5','dasargg','dasargg3','dasargg4','dasargg5','dasargg1'));
    }

    
}
