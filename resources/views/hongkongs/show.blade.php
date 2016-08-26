@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Category #{{ $hongkongs->id }}
        	</div>
        </div>

        <div class="panel-body">
            <div>
                Title : {{ $hongkongs->title }}
            </div>
            <div class="text-center">
                <a href="{{ url('/admin/hongkong') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
