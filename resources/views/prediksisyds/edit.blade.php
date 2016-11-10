@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Edit {{ $prediksisyds->periode }}
        	</div>
        </div>

        <div class="panel-body">
        	<form method="POST" action="/admin/prediksisyd/{{ $prediksisyds->id }}">
        		{{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="title">Hari</label>
                    <input type="text" name="hari" id="hari" class="form-control input-sm" placeholder="{{ $prediksisyds->hari }}">
                </div>
                
                <div class="form-group">
                    <label for="title">Number</label>
                    <input type="text" name="number" id="number" class="form-control input-sm" placeholder="{{ $prediksisyds->number }}">
                </div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
    </div>
@endsection