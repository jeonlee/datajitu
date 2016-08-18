<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

use App\Http\Requests;

class GroupsController extends Controller
{
    public function index() 
    {
    	$groups = Group::all();

    	return view('groups.index', compact('groups'));
    }

    public function create(Request $request)
    {
    	return view('groups.create');
    }

    public function store(Request $request)
    {
        Group::create($request->all());

        $groups = Group::all();

        return view('groups.index', compact('groups'));
    }

    public function show($id)
    {
        $groups = Group::find($id);

        return view('groups.show', compact('groups'));
    }

    public function edit($id)
    {
        $groups = Group::find($id);

        return view('groups.edit', compact('groups'));
    }

    public function update($id, Request $request)
    {
        $group = Group::findOrFail($id);

        $input = $request->all();

        $group->fill($input)->save();

        return back();
    }

    public function delete($id)
    {
        Group::find($id)->delete();

        return back();
    }
}
