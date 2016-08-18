@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="{{ url('/groups/create') }}" class="btn btn-primary">Create New</a>
	</div>

	<hr>

    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		List Groups
        	</div>
        </div>

        <div class="panel-body">
            <table class="table table-border table-hover">
            	<thead>
            		<tr>
            			<th style="width:20%">No</th>
            			<th style="width:60%">Groups</th>
                        <th style="width:10%"></th>
                        <th style="width:10%"></th>
            		</tr>
            	</thead>
            	<tbody>
            		@foreach ($groups as $group)
                		<tr>
                			<td>{{ $group->id }}</td>
                			<td><a href="{{ $group->path() }}">{{ $group->name }}</a></td>
                            <td><a href="/groups/{{ $group->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/groups/{{ $group->id }}/delete">
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
