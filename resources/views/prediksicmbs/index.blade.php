@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="{{ url('/admin/prediksicmb/create') }}" class="btn btn-primary">Create New</a>
	</div>

	<hr>

    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		List Prediksi Cambodia
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
                    @foreach ($prediksicmbs as $prediksicmb)
                        <tr>
                            <td>{{ $prediksicmb->hari }}</td>
                            <th>{{ Carbon\Carbon::parse($prediksicmb->tanggal)->format('d-m-Y') }}</th>
                            <td>{{ $prediksicmb->prediksi }}</td>
                            <td><a href="/admin/prediksicmb/{{ $prediksicmb->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/admin/prediksicmb/{{ $prediksicmb->id }}/delete">
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
                {!! $prediksicmbs->render(); !!}
            </div>
        </div>
    </div>
@endsection


@section('footer')
    Footer result
@endsection
