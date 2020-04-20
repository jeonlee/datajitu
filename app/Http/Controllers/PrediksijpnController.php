<?php

namespace App\Http\Controllers;

use App\Prediksijpn;
use Illuminate\Http\Request;

use App\Http\Requests;

class PrediksijpnController extends Controller
{
    public function index()
	{
    	$prediksijpns = Prediksijpn::orderBy('tanggal','desc')->paginate(5);

    	return view('prediksijpns.index', compact('prediksijpns'));
	}
	public function create()
	{
		return view('prediksijpns.create');
	}

	public function store(Request $request, Prediksijpn $prediksijpn)
	{
        Prediksijpn::create($request->all());

        $prediksijpns = Prediksijpn::orderBy('tanggal','desc')->paginate(5);

        return view('prediksijpns.index', compact('prediksijpns'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $prediksijpns = Prediksijpn::find($id);

        return view('prediksijpns.show', compact('prediksijpns'));
    }

    public function edit($id)
    {
        $prediksijpns = Prediksijpn::find($id);
	$tes=json_encode($prediksijpns->prediksi);
        return view('prediksijpns.edit', compact('prediksijpns','tes'));
    }

    public function update($id, Request $request)
    {
        $prediksijpn = Prediksijpn::findOrFail($id);

        $input = $request->all();

        $prediksijpn->fill($input)->save();

        $prediksijpns = Prediksijpn::orderBy('tanggal','desc')->paginate(5);

        return view('prediksijpns.index', compact('prediksijpns'));
    }

    public function delete($id)
    {
        Prediksijpn::find($id)->delete();

        return back();
    }
}
