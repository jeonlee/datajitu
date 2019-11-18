@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Edit {{ $prediksichns->periode }}
        	</div>
        </div>

        <div class="panel-body">
        	<form method="POST" action="/admin/china/{{ $prediksichns->id }}">
        		{{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="title">Number</label>
                    <input type="text" name="number" id="number" class="form-control input-sm" placeholder="{{ $prediksichns->prediksi }}">
                </div>
		<div class="form-group">
                    <label for="title">Deskripsi</label>
                    <textarea for="text" name="deskripsi" id="summernote" class="form-control summernote">{{ $prediksichns->deskripsi }}</textarea>
                </div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
    </div>
@endsection
