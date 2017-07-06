@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="{{ url('/admin/hongkong/create') }}" class="btn btn-primary">Create New</a>
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
                        <th>Periode</th>
                        <th>Result</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hongkongs as $hongkong)
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><a href="/admin/hongkong/{{ $hongkong->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/admin/hongkong/{{ $hongkong->id }}/delete">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <!-- <button type="submit" class="btn btn-danger btn-sm">Delete</button> -->                
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $hongkongs->render(); !!}
            </div>
        </div>
    </div>
@endsection


@section('footer')
    datajitu.com
@endsection
