@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		User #{{ $users->id }}
        	</div>
        </div>

        <div class="panel-body">
            <div>
                Name : {{ $users->name }}
            </div>
            <div>
                Email : {{ $users->email }}
            </div>
        </div>
    </div>
@endsection
