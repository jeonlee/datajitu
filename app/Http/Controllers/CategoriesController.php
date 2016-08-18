<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriesController extends Controller
{
    public function index() 
    {
    	$categories = Category::all();

    	return view('categories.index', compact('categories'));
    }

    public function create(Request $request)
    {
    	return view('categories.create');
    }

    public function store(Request $request)
    {
        Category::create($request->all());

        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
        // $categories = Category::find($id);
        $categories = Category::with('reports.user')->find($id);

        return view('categories.show', compact('categories'));
    }

    public function edit($id)
    {
        $categories = Category::find($id);

        return view('categories.edit', compact('categories'));
    }

    public function update($id, Request $request)
    {
        $category = Category::findOrFail($id);

        $input = $request->all();

        $category->fill($input)->save();

        return back();
    }

    public function delete($id)
    {
        Category::find($id)->delete();

        return back();
    }
}
