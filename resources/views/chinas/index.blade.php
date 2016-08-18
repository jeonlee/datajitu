@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="{{ url('/admin/china/create') }}" class="btn btn-primary">Create New</a>
	</div>

	<hr>

    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		List Results China
        	</div>
        </div>

        <div class="panel-body">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($chinas as $china)
                        <tr>
                            <td>{{ $china->hari }}</td>
                            <td>{{ $china->tanggal }}</td>
                            <td>{{ $china->periode }}</td>
                            <td>{{ $china->number }}</td>
                            <td><a href="/admin/china/{{ $china->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/admin/china/{{ $china->id }}/delete">
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
    Footer result
@endsection