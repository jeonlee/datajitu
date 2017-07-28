@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="{{ url('/admin/sydney/create') }}" class="btn btn-primary">Create New</a>
	</div>

	<hr>

    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		List Results Sydney
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
                    @foreach ($sydneys as $sydney)
                        <tr>
                            <td>{{ $sydney->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($sydney->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $sydney->periode }}-SD</td>
                            <td>{{ $sydney->number }}</td>
                            <td><a href="/admin/sydney/{{ $sydney->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/admin/sydney/{{ $sydney->id }}/delete">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <!-- <button type="submit" class="btn btn-danger btn-sm">Delete</button>  -->              
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $sydneys->render(); !!}
            </div>
        </div>
    </div>
@endsection


@section('footer')
    datajitu.com
@endsection
