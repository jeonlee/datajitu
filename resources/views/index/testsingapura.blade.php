@extends('layouts.index')

@section('content')
      
            
              <div class="panel panel-primary">
                <div class="panel-heading p15 black font">
                  <div class="panel-title">
                    <h3>Hasil Keluaran Togel Singapura</h3>
                  </div>
                </div>

                <div class="panel-body">
                @foreach ($sorted->slice(0, 1) as $singapura)
                <?php

                    $satu = substr("$singapura->number",0,1);
                    $dua = substr("$singapura->number",1,1);
                    $tiga = substr("$singapura->number",2,1);
                    $empat = substr("$singapura->number",3,1);
                 ?>
                  <div class="col-xs-12" style="margin-top:15px;">
              <h3 class="josefin">TOGEL SINGAPURA</h3>
              <div class="resultBox shorter centred hidden-sm hidden-xs">
                <div class="sideHeader euromillions">
                  <div class="col-xs-5">
                    <img width="100%" src="images/singapura.png">
                  </div>
                  <div class="col-xs-7">
                    
                    <h3 style="color: #FFF;"><span class="smallerHeading">Hasil Keluaran </span><br>{{ $singapura->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($singapura->tanggal)->format('d-m-Y') }}</span></h3>
                  </div>
                </div><!-- sideheader -->
                <div style=" padding: 12px 2px 0 0;" class="floatRight centred">
                  <div class="result medium euromillions-ball"><?php  echo $satu; ?></div>
                  <div class="result medium euromillions-ball"><?php  echo $dua; ?></div>
                  <div class="result medium euromillions-ball"><?php  echo $tiga; ?></div>
                  <div class="result medium euromillions-ball"><?php  echo $empat; ?></div>
                  
             
                  <br><br>
          
                  <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasilsingapura') }}">Hasil Lengkap</a>
                </div>
              </div>
              
              <div class="resultBox shorter centred visible-xs visible-sm" style="width: 100%;">
                <div class="sideHeader euromillions" style="height: 150px; width: 100%; padding-top:0px; padding-bottom: 0px;">
                  <div class="col-xs-12">
                    
                    <h3 style="color: #FFF;"><span class="smallerHeading">{{ $singapura->hari }}</span> <br><span class="smallerHeading">{{ $singapura->tanggal }}</span></h3>
                  </div>
                  <div class="result medium euromillions-ball"><?php  echo $satu; ?></div>
                  <div class="result medium euromillions-ball"><?php  echo $dua; ?></div>
                  <div class="result medium euromillions-ball"><?php  echo $tiga; ?></div>
                  <div class="result medium euromillions-ball"><?php  echo $empat; ?></div>
                  <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasilsingapura') }}">Hasil Lengkap</a>
                </div><!-- sideheader -->
                <br><br>
             </div><!-- end resultbox -->


            </div><!-- end col-xs-12 -->

             @endforeach




                </div>
              </div>
            </div><!-- col-xs-9 -->    

      


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
