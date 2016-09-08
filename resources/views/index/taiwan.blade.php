@extends('layouts.index')

@section('content')

<div class="col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading p15 black font">
                  <div class="panel-title">
                    <h3>HASIL KELUARAN TOGEL TAIWAN</h3>
                  </div>
                </div>

                <div class="panel-body">
                @foreach ($sorted->slice(0, 5) as $taiwan)
                <?php

                    $satu = substr("$taiwan->number",0,1);
                    $dua = substr("$taiwan->number",1,1);
                    $tiga = substr("$taiwan->number",2,1);
                    $empat = substr("$taiwan->number",3,1);
                 ?>
                  <div class="col-xs-12" style="margin-top:15px;">
              <h3 class="josefin">TOGEL TAIWAN</h3>
              <div class="resultBox shorter centred">
                <div class="sideHeader postcode">
                  <div class="col-xs-5">
                    <img width="100%" src="images/taiwan.png">
                  </div>
                  <div class="col-xs-7">
                    
                    <h3 style="color: #FFF;"><span class="smallerHeading">Hasil Keluaran </span><br>{{ $taiwan->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($taiwan->tanggal)->format('d-m-Y') }}</span></h3>
                  </div>
                </div><!-- sideheader -->
                <div style=" padding: 12px 30px 0 0;" class="floatRight centred">
                  <div class="result medium euromillions-lucky-star"><?php  echo $satu; ?></div>
                  <div class="result medium euromillions-lucky-star"><?php  echo $dua; ?></div>
                  <div class="result medium euromillions-lucky-star"><?php  echo $tiga; ?></div>
                  <div class="result medium euromillions-lucky-star"><?php  echo $empat; ?></div>
             
                  <br><br>
          
                  <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasiltaiwan') }}">Hasil Lengkap</a>
                </div>
              </div>
            </div><!-- end col-xs-12 -->
            @endforeach
              

           




                </div>
              </div>
            </div><!-- col-xs-9 -->  

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
