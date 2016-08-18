@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="/users/create" class="btn btn-primary">Create New</a>
	</div>

	<hr>

    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		List Users
        	</div>
        </div>

        <div class="panel-body">
            <table class="table table-border table-hover">
            	<thead>
            		<tr>
            			<th>No</th>
            			<th>User</th>
                        <th>Group</th>
                        <th></th>
                        <th></th>
            		</tr>
            	</thead>
            	<tbody>
            		@foreach ($users as $user)
                		<tr>
                			<td>{{ $user->id }}</td>
                			<td><a href="{{ $user->path() }}">{{ $user->name }}</a></td>
                            <td>{{ $user->group->name }}</td>
                            <td><a href="/users/{{ $user->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/users/{{ $user->id }}/delete">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>                  
                                </form>
                            </td>
                		</tr>
            		@endforeach
            	</tbody>
            </table>
        </div>
    </div>
@endsection
