@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Category #{{ $taiwans->id }}
        	</div>
        </div>

        <div class="panel-body">
            <div>
                Title : {{ $taiwans->title }}
            </div>
            <div class="text-center">
                <a href="{{ url('/admin/taiwan') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
