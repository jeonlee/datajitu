<?php

namespace App\Http\Controllers;

use App\Prediksisgp;
use Illuminate\Http\Request;

use App\Http\Requests;

class PrediksisgpController extends Controller
{
    public function index()
	{
    	$prediksisgps = Prediksisgp::orderBy('tanggal','desc')->paginate(5);

    	return view('prediksisgps.index', compact('prediksisgps'));
	}
	public function create()
	{
		return view('prediksisgps.create');
	}

	public function store(Request $request, Prediksisgp $prediksisgp)
	{
        Prediksisgp::create($request->all());

        $prediksisgps = Prediksisgp::orderBy('tanggal','desc')->paginate(5);

        return view('prediksisgps.index', compact('prediksisgps'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $prediksisgps = Prediksisgp::find($id);

        return view('prediksisgps.show', compact('prediksisgps'));
    }

    public function edit($id)
    {
        $prediksisgps = Prediksisgp::find($id);

        return view('prediksisgps.edit', compact('prediksisgps'));
    }

    public function update($id, Request $request)
    {
        $prediksisgp = Prediksisgp::findOrFail($id);

        $input = $request->all();

        $prediksisgp->fill($input)->save();

        $prediksisgps = Prediksisgp::orderBy('tanggal','desc')->paginate(5);

        return view('prediksisgps.index', compact('prediksisgps'));
    }

    public function delete($id)
    {
        Prediksisgp::find($id)->delete();

        return back();
    }
}
