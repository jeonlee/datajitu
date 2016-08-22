@extends('layouts.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		Create New Results
        	</div>
        </div>

        <div class="panel-body">
        	<form method="POST" action="/admin/china">
        		{{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="form-group">
                    <label for="title">Hari</label>
                    <input type="text" name="hari" id="hari" class="form-control input-sm" placeholder="Hari">
                </div>
                <div class="form-group">
                    <label for="title">Tanggal</label>
                    <input type="text" name="tanggal" id="tanggal" class="form-control input-sm" placeholder="dd-mm-yyyy">
                </div>
                <div class="form-group">
                    <label for="title">Periode</label>
                    <input type="text" name="periode" id="periode" class="form-control input-sm">
                </div>
                <div class="form-group">
                    <label for="body">Number</label>
                    <input type="text" name="number" id="number" class="form-control input-sm">
                </div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
    </div>
@endsection
