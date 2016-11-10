@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="{{ url('/admin/prediksichn/create') }}" class="btn btn-primary">Create New</a>
	</div>

	<hr>

    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		List Results prediksichn1
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
                    @foreach ($prediksichns as $prediksichn)
                        <tr>
                            <td>{{ $prediksichn->hari }}</td>
                            <th>{{ Carbon\Carbon::parse($prediksichn->tanggal1)->format('d-m-Y') }}</th>
                            <td>{{ $prediksichn->prediksi }}</td>
                            <td><a href="/admin/prediksichn/{{ $prediksichn->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/admin/prediksichn/{{ $prediksichn->id }}/delete">
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
                {!! $prediksichns->render(); !!}
            </div>
        </div>
    </div>
@endsection


@section('footer')
    Footer result
@endsection