@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="{{ url('/admin/prediksihk/create') }}" class="btn btn-primary">Create New</a>
	</div>

	<hr>

    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		List Results Hongkong
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
                    @foreach ($prediksihks as $prediksihk)
                        <tr>
                            <td>{{ $prediksihk->hari }}</td>
                            <th>{{ Carbon\Carbon::parse($prediksihk->tanggal)->format('d-m-Y') }}</th>
                            <td>{{ $prediksihk->prediksi }}</td>
                            <td><a href="/admin/prediksihk/{{ $prediksihk->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/admin/prediksihk/{{ $prediksihk->id }}/delete">
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
                {!! $prediksihks->render(); !!}
            </div>
        </div>
    </div>
@endsection


@section('footer')
    Footer result
@endsection
