@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Create New User
        	</div>
        </div>

        <div class="panel-body">
        	<form method="POST" action="/users">
        		{{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control input-sm">
                </div>
                <div class="form-group">
                    <label for="email">E-mail Address</label>
                    <input type="email" name="email" id="email" class="form-control input-sm">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control input-sm">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm">
                </div>
                <div class="form-group">
                    <label for="body">Group</label>
                    <select class="form-control" name="group_id">
                        @foreach ($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                        @endforeach
                    </select>
                </div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
    </div>
@endsection