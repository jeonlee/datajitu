@extends('layouts.index')

@section('numbergenerator')

<div class="col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading p15 black font">
                  <div class="panel-title">
                    <h3>NUMBER GENERATOR</h3>
                  </div>
                </div>
                <div class="panel-body">
                <div id="sm">
                  <div class="group lever1">
                    <button>Start</button>
                  </div>
                  <div class="group1">
                    <div class="reel1" style="width:80px; height:100px; margin-right:20px;"></div>
                    <div class="reel1" style="width:80px; height:100px; margin-right:20px;"></div>
                    <div class="reel1" style="width:80px; height:100px; margin-right:20px;"></div>
                    <div class="reel1" style="width:80px; height:100px; margin-right:20px;"></div>
                  </div>
                  <p class="msg">Press Start</p>
                </div>
                </div>
              </div>
            </div><!-- col-xs-9 -->
@endsection
