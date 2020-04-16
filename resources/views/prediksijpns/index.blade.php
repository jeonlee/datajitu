@extends('layouts.layout')

@section('content')
    <div class="text-center">
        <a href="{{ url('/admin/prediksijpn/create') }}" class="btn btn-primary">Create New</a>
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
                        <th>Prediksi</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prediksijpns as $prediksijpn)
                        <tr>
                            <td>{{ $prediksijpn->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($prediksijpn->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $prediksijpn->prediksi }}</td>
                            <td><a href="/admin/prediksijpn/{{ $prediksijpn->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/admin/prediksijpn/{{ $prediksijpn->id }}/delete">
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
                {!! $prediksijpns->render(); !!}
            </div>
        </div>
    </div>
@endsection


@section('footer')
    Footer result
@endsection
