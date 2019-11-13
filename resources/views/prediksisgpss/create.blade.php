@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Create New Results
        	</div>
        </div>

        <div class="panel-body">
        	<form method="POST" action="/admin/prediksisgp">
        		{{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <!-- <div class="form-group">
                    <label for="title">Date</label>
                    <input type="date" name="date" id="date" class="form-control input-sm" placeholder="Date">
                </div> -->
                
                 
                <div class="form-group">
                    <label for="title">Hari</label>
                    <input type="text" name="hari" id="hari" class="form-control input-sm" placeholder="Hari">
                </div>
                <div class="form-group datepicker">
                    <label for="title">Tanggal</label>
                    <input type="text" name="tanggal" id="datepicker" class="form-control input-sm" placeholder="dd-mm-yyyy">
                </div>
                <div class="form-group">
                    <label for="body">Prediksi</label>
                    <input type="text" name="prediksi" id="number" class="form-control input-sm">
                </div>
		<div class="form-group">
                    <label for="body">Prediksi</label>
                    <textarea></textarea>
                </div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
    </div>
@endsection
