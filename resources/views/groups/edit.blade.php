@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Edit {{ $groups->name }}
        	</div>
        </div>

        <div class="panel-body">
        	<form method="POST" action="/groups/{{ $groups->id }}">
        		{{ csrf_field() }}
                {{ method_field('PATCH') }}
        		<div class="form-group">
        			<label for="name"></label>
        			<input type="text" name="name" id="name" class="form-control">
        		</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
    </div>
@endsection