@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="{{ url('/categories/create') }}" class="btn btn-primary">Create New</a>
	</div>

	<hr>

    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		List Category Report
        	</div>
        </div>

        <div class="panel-body">
            <table class="table table-border table-hover">
            	<thead>
            		<tr>
            			<th style="width:20%">No</th>
            			<th style="width:40%">Category</th>
                        <th style="width:20%">Created</th>
                        <th style="width:10%"></th>
                        <th style="width:10%"></th>
            		</tr>
            	</thead>
            	<tbody>
            		@foreach ($categories as $category)
                		<tr>
                			<td>{{ $category->id }}</td>
                			<td><a href="{{ $category->path() }}">{{ $category->title }}</a></td>
                            <td>{{ $category->created_at }}</td>
                            <td><a href="/categories/{{ $category->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/categories/{{ $category->id }}/delete">
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
