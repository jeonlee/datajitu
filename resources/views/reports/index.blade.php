@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="{{ url('/reports/create') }}" class="btn btn-primary">Create New</a>
	</div>

	<hr>

    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		List Reports
        	</div>
        </div>

        <div class="panel-body">
            <table class="table table-border table-hover">
            	<thead>
            		<tr>
            			<th style="width:20%">No</th>
            			<th style="width:60%">Report</th>
                        <th style="width:10%">Kategori</th>
                        <th style="width:5%">Created By</th>
                        <th style="width:5%">Created At</th>
                        <th style="width:5%"></th>
                        <th style="width:5%"></th>
            		</tr>
            	</thead>
            	<tbody>
            		@foreach ($reports as $report)
                		<tr>
                			<td>{{ $report->id }}</td>
                			<td><a href="{{ $report->path() }}">{{ $report->title }}</a></td>
                            <td>{{ $report->category->title }}</td>
                            <td>{{ $report->user->name }}</td>
                            <td>{{ $report->created_at }}</td>
                            <td><a href="/categories/{{ $report->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/reports/{{ $report->id }}/delete">
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


@section('footer')
    Footer Report
@endsection