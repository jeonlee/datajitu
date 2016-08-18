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
        </div>
    </div>
@endsection
