@extends('layouts.index')

@section('ng')

<div class="col-xs-12 hidden-sm hidden-xs">
    <div class="panel panel-primary">
      <div class="panel-heading p15 black font">
        <div class="panel-title">
          <h3>NUMBER GENERATOR</h3>
        </div>
      </div>
      <div class="panel-body">
      <div id="sm">
        <div class="group lever1">
          <button class="numgen">Start</button>
        </div>
        <div class="group1">
          <div class="reel" style="width:80px; height:100px; margin-right:20px;"></div>
          <div class="reel" style="width:80px; height:100px; margin-right:20px;"></div>
          <div class="reel" style="width:80px; height:100px; margin-right:20px;"></div>
          <div class="reel" style="width:80px; height:100px; margin-right:20px;"></div>
        </div>
        <p class="msg">Press Start</p>
      </div>
      </div>
    </div>
  </div><!-- col-xs-9 -->
  
  

  
@endsection
@section('numbergeneratorm')


              <div class="col-xs-12 visible-sm visible-xs">
    <div class="panel panel-primary">
      <div class="panel-heading p15 black font">
        <div class="panel-title">
          <h3>NUMBER GENERATOR</h3>
        </div>
      </div>
      <div class="panel-body">
      <div id="sm" style="width:100%;">
        <div class="group lever1" style="width:100%;">
          <button class="numgen" style="font-size:1em;width:100%; line-height:30px;">Start</button>
        </div>
        <div class="group" style="width:100%;">
          <div class="reel1" style="width:18%; height:100px; margin-right:15px;"></div>
          <div class="reel1" style="width:18%; height:100px; margin-right:15px;"></div>
          <div class="reel1" style="width:18%; height:100px; margin-right:15px;"></div>
          <div class="reel1" style="width:18%; height:100px; margin-right:12px;"></div>
        </div>
        <p class="msg">Press Start</p>
      </div>
      </div>
    </div>
  </div><!-- col-xs-9 -->
@endsection
