@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                Category #{{ $japans->id }}
            </div>
        </div>

        <div class="panel-body">
            <div>
                Title : {{ $japans->title }}
            </div>
        </div>
    </div>
@endsection
