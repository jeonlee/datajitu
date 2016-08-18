<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Report;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class ReportsController extends Controller
{
	public function index()
	{
    	$reports = Report::all();

    	return view('reports.index', compact('reports'));
	}

	public function create()
	{
        $reports = Report::all();
        $categories = Category::all();

		return view('reports.create', compact('reports', 'categories'));
	}

	public function store(Request $request, Report $report)
	{
        Report::create($request->all());

        $reports = Report::all();

        return view('reports.index', compact('reports'));
	}

    public function show($id)
    {
        $reports = Report::find($id);

        return view('reports.show', compact('reports'));
    }

    public function edit($id)
    {
        $reports = Report::find($id);

        return view('reports.edit', compact('reports'));
    }

    public function update($id, Request $request)
    {
        $report = Report::findOrFail($id);

        $input = $request->all();

        $report->fill($input)->save();

        return back();
    }

    public function delete($id)
    {
        Report::find($id)->delete();

        return back();
    }
}
