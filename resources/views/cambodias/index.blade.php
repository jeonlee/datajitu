@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="{{ url('/admin/cambodia/create') }}" class="btn btn-primary">Create New</a>
	</div>

	<hr>

    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		List Results Cambodia
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
                    @foreach ($cambodias as $cambodia)
                        <tr>
                            <td>{{ $cambodia->hari }}</td>
                            <td>{{ $cambodia->tanggal }}</td>
                            <td>{{ $cambodia->periode }}-MC</td>
                            <td>{{ $cambodia->number }}</td>
                            <td><a href="/admin/cambodia/{{ $cambodia->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
			    	@if(Auth::user()->name =='khalnimo' || Auth::user()->name =='pakde')
                                <form method="POST" action="/admin/cambodia/{{ $cambodia->id }}/delete">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>               
                                </form>
				@endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $cambodias->render(); !!}
            </div>
        </div>
    </div>
@endsection


@section('footer')
    datajitu.com
@endsection
