@extends('layouts.index')

@section('content')
<div class="panel panel-primary">
  <div class="panel-heading p15 black font">
    <div class="panel-title">
      <h3>RESULT SGP</h3>
    </div>
  </div>
  <div class="panel-body">
		<div style="width:320px; height:275px; left:10px; overflow:hidden;position:relative; margin-bottom:10px; float:left;">
          	<iframe scrolling="no" src="http://www.singaporepools.com.sg/en/product/Pages/toto_results.aspx" style="border: 0px none; margin-left: -41px; margin-top: -340px; width: 316px; height: 738px;"></iframe>
        </div>
        <div style="width:289px; height:182px; left:60px; overflow:hidden;position:relative; margin-bottom:10px; float:left;">
          <iframe scrolling="no" src="http://www.singaporepools.com.sg/en/product/Pages/4d_results.aspx" style="border: 0px none; margin-top: -486px; width: 707px; height: 683px; margin-left: -44px;"></iframe>
        </div>
	<div style="width:289px; height:182px; left:158px; overflow:hidden;position:relative; margin-bottom:10px; float:left;">
          <iframe scrolling="no" src="http://www.singaporepools.com.sg/en/product/Pages/4d_results.aspx" style="border: 0px none; margin-top: -486px; width: 707px; height: 683px; margin-left: -355px;"></iframe>
        </div>
	<div style="width:289px; height:182px; left:60px; overflow:hidden;position:relative; margin-bottom:10px; float:left;">
          <iframe scrolling="no" src="http://www.singaporepools.com.sg/en/product/Pages/4d_results.aspx" style="border: 0px none; margin-top: -400px; width: 1000px; height: 682px; margin-left: -658px;"></iframe>
        </div>
    </div>
</div>

@endsection

@section('numbergenerator')
              <div class="panel panel-default" style="margin-top:15px;">
                <div class="panel-heading pink">
                  <h3 class="panel-title white">NUMBER GENERATOR</h3>
                </div>
                <div class="panel-body p15">
                  <p class="helvetica" style="text-align:center;">Generate your numbers</p>
                  <br>
                  <a title="Lottery Results - Lotto" class="button-blue"><button style="border:none; background:transparent;">Generate Numbers</button></a><br><br>
                  <div class="group">
                    <div class="reel"></div>
                    <div class="reel"></div>
                    <div class="reel"></div>
                    <div class="reel"></div>
                  </div>
                </div>
              </div>
@endsection
