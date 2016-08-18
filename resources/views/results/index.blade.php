@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="{{ url('/results/create') }}" class="btn btn-primary">Create New</a>
	</div>

	<hr>

    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		List Results Singapura
        	</div>
        </div>

        <div class="panel-body">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Periode</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $result)
                        <tr>
                            <td>{{ $result->created_at }}</td>
                            <td>{{ $result->periode }}</td>
                            <td>{{ $result->number }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


@section('footer')
    Footer result
@endsection