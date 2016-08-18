<?php

namespace App\Http\Controllers;

use App\User;
use App\Group;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
	public function index() 
	{
		$users = User::all();

		return view('users.index', compact('users'));
	}

	public function create()
	{
        $users = User::all();
        $groups = Group::all();

		return view('users.create', compact('users', 'groups'));
	}

	public function store(Request $request)
	{
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'group_id' => $request['group_id'],
        ]);

		$users = User::all();

        return view('users.index', compact('users'));
	}

    public function show($id)
    {
        $users = User::find($id);

        return view('users.show', compact('users'));
    }

    public function edit($id)
    {
        $users = User::find($id);

        return view('users.edit', compact('users'));
    }

    public function update($id, Request $request)
    {
        $user = User::findOrFail($id);

        $input = $request->all();

        $user->fill($input)->save();

        return back();
    }

    public function delete($id)
    {
        User::find($id)->delete();

        return back();
    }
}
