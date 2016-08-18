@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Create New Reports
        	</div>
        </div>

        <div class="panel-body">
        	<form method="POST" action="/reports">
        		{{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control input-sm">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <input type="text" name="body" id="body" class="form-control input-sm">
                </div>
                <div class="form-group">
                    <label for="body">Kategori</label>
                    <select class="form-control" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
    </div>
@endsection