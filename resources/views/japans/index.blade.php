@extends('layouts.layout')

@section('content')
    <div class="text-center">
        <a href="{{ url('/admin/japan/create') }}" class="btn btn-primary">Create New</a>
    </div>

    <hr>

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                List Results Japan
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
                    @foreach ($japans as $japan)
                        <tr>
                            <td>{{ $japan->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($japan->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $japan->periode }}-JPN</td>
                            <td>{{ $japan->number }}</td>
                            <td><a href="/admin/japan/{{ $japan->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/admin/japan/{{ $japan->id }}/delete">
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
                {!! $japans->render(); !!}
            </div>
        </div>
    </div>
@endsection


@section('footer')
    datajitu.com
@endsection
