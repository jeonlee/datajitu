@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <br>
                    Hi {{ Auth::user()->name }}
                    <br>
                    ID : {{ Auth::user()->id }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
