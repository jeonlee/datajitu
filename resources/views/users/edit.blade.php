@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Edit {{ $users->title }}
        	</div>
        </div>

        <div class="panel-body">
        	<form method="POST" action="/users/{{ $users->id }}">
        		{{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="name"></label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input type="text" name="email" id="email">
                </div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
    </div>
@endsection