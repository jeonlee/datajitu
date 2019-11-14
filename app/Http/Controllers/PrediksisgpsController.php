<?php

namespace App\Http\Controllers;

use App\Prediksisgp;
use Illuminate\Http\Request;

use App\Http\Requests;

class PrediksisgpsController extends Controller
{
    public function index()
	{
    	$prediksisgps = Prediksisgp::orderBy('tanggal','desc')->paginate(5);

    	return view('prediksisgpss.index', compact('prediksisgps'));
	}
	public function create()
	{
		return view('prediksisgpss.create');
	}

	public function store(Request $request, Prediksisgp $prediksisgp)
	{
        Prediksisgp::create($request->all());

        $prediksisgps = Prediksisgp::orderBy('tanggal','desc')->paginate(5);

        return view('prediksisgpss.index', compact('prediksisgps'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $prediksisgps = Prediksisgp::find($id);

        return view('prediksisgpss.show', compact('prediksisgps'));
    }

    public function edit($id)
    {
        $prediksisgps = Prediksisgp::find($id);
	$tes=json_encode($prediksisgps->prediksi);
        return view('prediksisgpss.edit', compact('prediksisgps','tes'));
    }

    public function update($id, Request $request)
    {
        $prediksisgp = Prediksisgp::findOrFail($id);

        $input = $request->all();

        $prediksisgp->fill($input)->save();

        $prediksisgps = Prediksisgp::orderBy('tanggal','desc')->paginate(5);

        return view('prediksisgpss.index', compact('prediksisgps'));
    }

    public function delete($id)
    {
        Prediksisgp::find($id)->delete();

        return back();
    }
}
