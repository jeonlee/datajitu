<?php

namespace App\Http\Controllers;
use App\Hongkong;
use Illuminate\Http\Request;

use App\Http\Requests;

class HongkongController extends Controller
{
    public function index()
	{
    	$hongkongs = Hongkong::orderBy('periode','desc')->paginate(5);

    	return view('hongkongs.index', compact('hongkongs'));
	}
	public function create()
	{
		return view('hongkongs.create');
	}

	public function store(Request $request, Hongkong $hongkong)
	{
        Hongkong::create($request->all());

        $hongkongs = Hongkong::orderBy('periode','desc')->paginate(5);

        return view('hongkongs.index', compact('hongkongs'));
	}
	public function show($id)
    {
        // $categories = Category::find($id);
        $hongkongs = Hongkong::find($id);

        return view('hongkongs.show', compact('hongkongs'));
    }

    public function edit($id)
    {
        $hongkongs = Hongkong::find($id);

        return view('hongkongs.edit', compact('hongkongs'));
    }

    public function update($id, Request $request)
    {
        $hongkong = Hongkong::findOrFail($id);

        $input = $request->all();

        $hongkong->fill($input)->save();

        $hongkongs = Hongkong::all();

        return view('hongkongs.index', compact('hongkongs'));
    }

    public function delete($id)
    {
        Hongkong::find($id)->delete();

        return back();
    }
}
