@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="{{ url('/admin/prediksitw/create') }}" class="btn btn-primary">Create New</a>
	</div>

	<hr>

    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		List Results Taiwan
        	</div>
        </div>

        <div class="panel-body">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Prediksi</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prediksitws as $prediksitw)
                        <tr>
                            <td>{{ $prediksitw->hari }}</td>
                            <th>{{ Carbon\Carbon::parse($prediksitw->tanggal)->format('d-m-Y') }}</th>
                            <td>{{ $prediksitw->prediksi }}</td>
                            <td><a href="/admin/prediksitw/{{ $prediksitw->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/admin/prediksitw/{{ $prediksitw->id }}/delete">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>                  
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $prediksitws->render(); !!}
            </div>
        </div>
    </div>
@endsection


@section('footer')
    Footer result
@endsection