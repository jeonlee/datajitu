@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Create New Category
        	</div>
        </div>

        <div class="panel-body">
        	<form method="POST" action="/categories">
        		{{ csrf_field() }}
        		<div class="form-group">
        			<label for="title">Title</label>
        			<input type="text" name="title" id="title" class="form-control input-sm">
        		</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
    </div>
@endsection