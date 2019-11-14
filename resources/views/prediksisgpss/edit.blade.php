@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Edit Periode SG-{{ $prediksisgps->periode }}
        	</div>
        </div>

        <div class="panel-body">
        	<form method="POST" action="/admin/prediksisgp/{{ $prediksisgps->id }}">
        		{{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="title">Periode</label>
                    <input type="text" name="periode" id="periode" class="form-control input-sm" placeholder="{{ $prediksisgps->periode }}">
                </div>
                <div class="form-group">
                    <label for="title">Number</label>
                    <input type="text" name="number" id="number" class="form-control input-sm" placeholder="{{ $prediksisgps->number }}">
                </div>
                <div class="form-group">
                    <label for="title">Deskripsi</label>{{ $tes }}
                    <textarea for="text" class="form-control">{{ $prediksisgps->deskripsi }}</textarea>
                </div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
    </div>
@endsection
