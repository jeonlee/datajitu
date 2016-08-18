@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Report #{{ $reports->id }}
        	</div>
        </div>

        <div class="panel-body">
            <div>
                Title : {{ $reports->title }}
            </div>
            <div>
                Body : {{ $reports->body }}
            </div>
            <div>
                Body : {{ $reports->category->title }}
            </div>
        </div>
    </div>
@endsection
