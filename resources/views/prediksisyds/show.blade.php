@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Category #{{ $sydneys->id }}
        	</div>
        </div>

        <div class="panel-body">
            <div>
                Title : {{ $sydneys->title }}
            </div>
        </div>
    </div>
@endsection
