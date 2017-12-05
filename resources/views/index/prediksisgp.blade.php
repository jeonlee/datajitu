@extends('layouts.index')

@section('content')

  @foreach ($sorted->slice(0, 1) as $prediksisgp)
  <?php

      $satu = substr("$prediksisgp->prediksi",0,1);
      $dua = substr("$prediksisgp->prediksi",1,1);
      $tiga = substr("$prediksisgp->prediksi",2,1);
      $empat = substr("$prediksisgp->prediksi",3,1);
   ?>
  <div class="col-xs-12" style="margin-top:15px;">
    <h3 class="josefin">TOGEL SINGAPURA</h3>
    <div class="resultBox shorter centred hidden-sm hidden-xs">
      <div class="sideHeader euromillions">
        <div class="col-xs-5">
          <img width="100%" src="images/singapura.png">
        </div>
        <div class="col-xs-7">
          
          <h3 style="color: #FFF;"><span class="smallerHeading">Hasil Keluaran </span><br>{{ $prediksisgp->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksisgp->tanggal)->format('d-m-Y') }}</span></h3>
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
    </div><!-- end result-box -->
              
    <div class="resultBox shorter centred visible-xs visible-sm" style="width: 100%;">
      <div class="sideHeader euromillions" style="height: 150px; width: 100%; padding-top:0px; padding-bottom: 0px;">
        <div class="col-xs-12">
          <h3 style="color: #FFF;"><span class="smallerHeading">{{ $prediksisgp->hari }}</span> <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksisgp->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
        <div class="result medium euromillions-ball"><?php  echo $satu; ?></div>
        <div class="result medium euromillions-ball"><?php  echo $dua; ?></div>
        <div class="result medium euromillions-ball"><?php  echo $tiga; ?></div>
        <div class="result medium euromillions-ball"><?php  echo $empat; ?></div><br>
        <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasilsingapura') }}">Hasil Lengkap</a>
      </div><!-- sideheader -->
      <br><br>
    </div><!-- end resultbox -->
    
  </div>
  @endforeach
  
  @foreach ($sorted2->slice(0, 1) as prediksicmb)
  <?php

      $satu = substr("$prediksicmb->prediksi",0,1);
      $dua = substr("$prediksicmb->prediksi",1,1);
      $tiga = substr("$prediksicmb->prediksi",2,1);
      $empat = substr("$prediksicmb->prediksi",3,1);
   ?>
  <div class="col-xs-12" style="margin-top:15px;">
    <h3 class="josefin">TOGEL CAMBODIA</h3>
    <div class="resultBox shorter centred hidden-sm hidden-xs">
      <div class="sideHeader lotto">
        <div class="col-xs-5">
          <img width="100%" src="images/cambodia.png">
        </div>
        <div class="col-xs-7">
          
          <h3 style="color: #FFF;"><span class="smallerHeading">Hasil Keluaran </span><br>{{ $prediksicmb->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksicmb->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
      </div><!-- sideheader -->
      <div style=" padding: 12px 2px 0 0;" class="floatRight centred">
        <div class="result medium lotto-ball"><?php  echo $satu; ?></div>
        <div class="result medium lotto-ball"><?php  echo $dua; ?></div>
        <div class="result medium lotto-ball"><?php  echo $tiga; ?></div>
        <div class="result medium lotto-ball"><?php  echo $empat; ?></div>

        <br><br>
        <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasilcambodia') }}">Hasil Lengkap</a>
      </div>
    </div>
            
    <div class="resultBox shorter centred visible-xs visible-sm" style="width: 100%;">
      <div class="sideHeader lotto" style="height: 150px; width: 100%; padding-top:0px; padding-bottom: 0px;">
        <div class="col-xs-12">
          
          <h3 style="color: #FFF;"><span class="smallerHeading">{{ $prediksicmb->hari }}</span> <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksicmb->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
        <div class="result medium lotto-ball"><?php  echo $satu; ?></div>
        <div class="result medium lotto-ball"><?php  echo $dua; ?></div>
        <div class="result medium lotto-ball"><?php  echo $tiga; ?></div>
        <div class="result medium lotto-ball"><?php  echo $empat; ?></div><br>
        <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasilcambodia') }}">Hasil Lengkap</a>
      </div><!-- sideheader -->
      <br><br>
    </div><!-- end resultbox -->
      
  </div><!-- end col-xs-6 -->
  @endforeach
  
@endsection
