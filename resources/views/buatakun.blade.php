@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                @if({{ Auth::user()->name }}=='khalnimo')
                <div class="panel-body">
                    <a href="{{ url('/register123321') }}">Register</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
