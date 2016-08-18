@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Edit {{ $categories->title }}
        	</div>
        </div>

        <div class="panel-body">
        	<form method="POST" action="/admin/sydney/{{ $categories->id }}">
        		{{ csrf_field() }}
                {{ method_field('PATCH') }}
        		<div class="form-group">
        			<label for="title"></label>
        			<input type="text" name="title" id="title">
        		</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
    </div>
@endsection