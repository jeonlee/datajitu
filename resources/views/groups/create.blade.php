@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Create New Groups
        	</div>
        </div>

        <div class="panel-body">
        	<form method="POST" action="/groups">
        		{{ csrf_field() }}
        		<div class="form-group">
        			<label for="name">Name</label>
        			<input type="text" name="name" id="name" class="form-control input-sm">
        		</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
    </div>
@endsection