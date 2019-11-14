@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Edit {{ $prediksihks->periode }}
        	</div>
        </div>

        <div class="panel-body">
        	<form method="POST" action="/admin/hongkong/{{ $prediksihks->id }}">
        		{{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="title">Periode</label>
                    <input type="text" name="periode" id="periode" class="form-control input-sm" placeholder="{{ $prediksihks->periode }}">
                </div>
                <div class="form-group">
                    <label for="title">Number</label>
                    <input type="text" name="number" id="number" class="form-control input-sm" placeholder="{{ $prediksihks->number }}">
                </div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
    </div>
@endsection
