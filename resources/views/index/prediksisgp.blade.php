@extends('layouts.index')

@section('content')
  <div class="panel panel-primary">
    <div class="panel-heading p15 black font">
      <div class="panel-title">
        <h3>Prediksi Togel</h3>
      </div>
    </div>

    <div class="panel-body">
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
          
          <h3 style="color: #FFF;"><span class="smallerHeading">Prediksi Togel </span><br>{{ $prediksisgp->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksisgp->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
      </div><!-- sideheader -->
      <div style=" padding: 12px 2px 0 0;" class="floatRight centred1">
        <div class="result medium euromillions-ball"><?php  echo $satu; ?></div>
        <div class="result medium euromillions-ball"><?php  echo $dua; ?></div>
        <div class="result medium euromillions-ball"><?php  echo $tiga; ?></div>
        <div class="result medium euromillions-ball"><?php  echo $empat; ?></div>
                  
        <br><br>
          
        <!-- <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasilsingapura') }}">Hasil Lengkap</a>-->
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
        <!-- <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasilsingapura') }}">Hasil Lengkap</a> -->
      </div><!-- sideheader -->
      <br><br>
    </div><!-- end resultbox -->
    
  </div>
  @endforeach
  
  @foreach ($sorted2->slice(0, 1) as $prediksicmb)
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
          
          <h3 style="color: #FFF;"><span class="smallerHeading">Prediksi Togel </span><br>{{ $prediksicmb->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksicmb->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
      </div><!-- sideheader -->
      <div style=" padding: 12px 2px 0 0;" class="floatRight centred1">
        <div class="result medium lotto-ball"><?php  echo $satu; ?></div>
        <div class="result medium lotto-ball"><?php  echo $dua; ?></div>
        <div class="result medium lotto-ball"><?php  echo $tiga; ?></div>
        <div class="result medium lotto-ball"><?php  echo $empat; ?></div>

        <br><br>
        <!-- <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasilcambodia') }}">Hasil Lengkap</a> -->
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
        <!-- <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasilcambodia') }}">Hasil Lengkap</a> -->
      </div><!-- sideheader -->
      <br><br>
    </div><!-- end resultbox -->
      
  </div><!-- end col-xs-6 -->
  @endforeach
  
  @foreach ($sorted1->slice(0, 1) as $prediksisyd)
  <?php

      $satu = substr("$prediksisyd->prediksi",0,1);
      $dua = substr("$prediksisyd->prediksi",1,1);
      $tiga = substr("$prediksisyd->prediksi",2,1);
      $empat = substr("$prediksisyd->prediksi",3,1);
   ?>
  <div class="col-xs-12" style="margin-top:15px;">
    <h3 class="josefin">TOGEL SYDNEY</h3>
    <div class="resultBox shorter centred hidden-sm hidden-xs">
      <div class="sideHeader hotpicks">
        <div class="col-xs-5">
          <img width="100%" src="images/sydney.png">
        </div>
        <div class="col-xs-7">
          <h3 style="color: #FFF;"><span class="smallerHeading">Prediksi Togel </span><br>{{ $prediksisyd->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksisyd->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
      </div><!-- sideheader -->
      <div style=" padding: 12px 2px 0 0;" class="floatRight centred1">
        <div class="result medium lotto-ball"><?php  echo $satu; ?></div>
        <div class="result medium lotto-ball"><?php  echo $dua; ?></div>
        <div class="result medium lotto-ball"><?php  echo $tiga; ?></div>
        <div class="result medium lotto-ball"><?php  echo $empat; ?></div>
        <br><br>
        <!-- <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasilsydney') }}">Hasil Lengkap</a> -->
      </div>
    </div>
          
    <div class="resultBox shorter centred visible-xs visible-sm" style="width: 100%;">
      <div class="sideHeader hotpicks" style="height: 150px; width: 100%; padding-top:0px; padding-bottom: 0px;">
        <div class="col-xs-12">
          
          <h3 style="color: #FFF;"><span class="smallerHeading">{{ $prediksisyd->hari }}</span> <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksisyd->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
        <div class="result medium lotto-ball"><?php  echo $satu; ?></div>
        <div class="result medium lotto-ball"><?php  echo $dua; ?></div>
        <div class="result medium lotto-ball"><?php  echo $tiga; ?></div>
        <div class="result medium lotto-ball"><?php  echo $empat; ?></div><br>
        <!-- <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasilsydney') }}">Hasil Lengkap</a> -->
      </div><!-- sideheader -->
      <br><br>
    </div><!-- end resultbox -->
    
  </div><!-- end col-xs-6 -->
  @endforeach

  @foreach ($sorted4->slice(0, 1) as $prediksichn)
    <?php

        $satu = substr("$prediksichn->prediksi",0,1);
        $dua = substr("$prediksichn->prediksi",1,1);
        $tiga = substr("$prediksichn->prediksi",2,1);
        $empat = substr("$prediksichn->prediksi",3,1);
     ?>
  <div class="col-xs-12" style="margin-top:15px;">
    <h3 class="josefin">TOGEL CHINA</h3>
    <div class="resultBox shorter centred hidden-sm hidden-xs">
      <div class="sideHeader health">
        <div class="col-xs-5">
        <img width="100%" src="images/china.png">
      </div>
      <div class="col-xs-7">
        <h3 style="color: #FFF;"><span class="smallerHeading">Prediksi Togel </span><br>{{ $prediksichn->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksichn->tanggal)->format('d-m-Y') }}</span></h3>
      </div>
    </div><!-- sideheader -->
    <div style=" padding: 12px 2px 0 0;" class="floatRight centred1">
      <div class="result medium health-ball"><?php  echo $satu; ?></div>
      <div class="result medium health-ball"><?php  echo $dua; ?></div>
      <div class="result medium health-ball"><?php  echo $tiga; ?></div>
      <div class="result medium health-ball"><?php  echo $empat; ?></div>
 
      <br><br>
  
      <!-- <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasilchina') }}">Hasil Lengkap</a> -->
    </div>
  </div>
          
  <div class="resultBox shorter centred visible-xs visible-sm" style="width: 100%;">
    <div class="sideHeader health" style="height: 150px; width: 100%; padding-top:0px; padding-bottom: 0px;">
      <div class="col-xs-12">
        
        <h3 style="color: #FFF;"><span class="smallerHeading">{{ $prediksichn->hari }}</span> <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksichn->tanggal)->format('d-m-Y') }}</span></h3>
      </div>
      <div class="result medium health-ball"><?php  echo $satu; ?></div>
      <div class="result medium health-ball"><?php  echo $dua; ?></div>
      <div class="result medium health-ball"><?php  echo $tiga; ?></div>
      <div class="result medium health-ball"><?php  echo $empat; ?></div><br>
      <!-- <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasilchina') }}">Hasil Lengkap</a> -->
    </div><!-- sideheader -->
    <br><br>
  </div><!-- end resultbox -->
              
              
  </div><!-- end col-xs-6 -->
  @endforeach

  @foreach ($sorted3->slice(0, 1) as $prediksitw)
  <?php

      $satu = substr("$prediksitw->prediksi",0,1);
      $dua = substr("$prediksitw->prediksi",1,1);
      $tiga = substr("$prediksitw->prediksi",2,1);
      $empat = substr("$prediksitw->prediksi",3,1);
   ?>
  <div class="col-xs-12" style="margin-top:15px;">
    <h3 class="josefin">TOGEL TAIWAN</h3>
    <div class="resultBox shorter centred hidden-sm hidden-xs">
      <div class="sideHeader postcode">
        <div class="col-xs-5">
          <img width="100%" src="images/taiwan.png">
          
        </div>
        <div class="col-xs-7">
          <h3 style="color: #FFF;"><span class="smallerHeading">Prediksi Togel </span><br>{{ $prediksitw->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksitw->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
      </div><!-- sideheader -->
      <div style=" padding: 12px 2px 0 0;" class="floatRight centred1">
        <div class="result medium euromillions-lucky-star"><?php  echo $satu; ?></div>
        <div class="result medium euromillions-lucky-star"><?php  echo $dua; ?></div>
        <div class="result medium euromillions-lucky-star"><?php  echo $tiga; ?></div>
        <div class="result medium euromillions-lucky-star"><?php  echo $empat; ?></div>
   
        <br><br>
    
        <!-- <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasiltaiwan') }}">Hasil Lengkap</a> -->
      </div>
    </div>
          
    <div class="resultBox shorter centred visible-xs visible-sm" style="width: 100%;">
      <div class="sideHeader postcode" style="height: 150px; width: 100%; padding-top:0px; padding-bottom: 0px;">
        <div class="col-xs-12">
          <h3 style="color: #FFF;"><span class="smallerHeading">{{ $prediksitw->hari }}</span> <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksitw->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
        <div class="result medium euromillions-lucky-star"><?php  echo $satu; ?></div>
        <div class="result medium euromillions-lucky-star"><?php  echo $dua; ?></div>
        <div class="result medium euromillions-lucky-star"><?php  echo $tiga; ?></div>
        <div class="result medium euromillions-lucky-star"><?php  echo $empat; ?></div><br>
        <!-- <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasiltaiwan') }}">Hasil Lengkap</a> -->
      </div><!-- sideheader -->
      <br><br>
    </div><!-- end resultbox -->
  </div><!-- end col-xs-6 -->
  @endforeach

  @foreach ($sorted5->slice(0, 1) as $prediksihk)
  <?php

      $satu = substr("$prediksihk->prediksi",0,1);
      $dua = substr("$prediksihk->prediksi",1,1);
      $tiga = substr("$prediksihk->prediksi",2,1);
      $empat = substr("$prediksihk->prediksi",3,1);
   ?>
  <div class="col-xs-12" style="margin-top:15px;">
    <h3 class="josefin">TOGEL HONGKONG</h3>
    <div class="resultBox shorter centred hidden-sm hidden-xs">
      <div class="sideHeader thunderball">
        <div class="col-xs-5">
          <img width="100%" src="images/hk.png">
        
        </div>
        <div class="col-xs-7">
          <h3 style="color: #FFF;"><span class="smallerHeading">Prediksi Togel </span><br>{{ $prediksihk->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksihk->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
      </div><!-- sideheader -->
      <div style=" padding: 12px 2px 0 0;" class="floatRight centred1">
        <div class="result medium thunderball-ball"><?php  echo $satu; ?></div>
        <div class="result medium thunderball-ball"><?php  echo $dua; ?></div>
        <div class="result medium thunderball-ball"><?php  echo $tiga; ?></div>
        <div class="result medium thunderball-ball"><?php  echo $empat; ?></div>
        <br><br>
        <!-- <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasilhongkong') }}">Hasil Lengkap</a> -->
      </div>
    </div>
            
    <div class="resultBox shorter centred visible-xs visible-sm" style="width: 100%;">
      <div class="sideHeader thunderball" style="height: 150px; width: 100%; padding-top:0px; padding-bottom: 0px;">
        <div class="col-xs-12">
          <h3 style="color: #FFF;"><span class="smallerHeading">{{ $prediksihk->hari }}</span> <br><span class="smallerHeading">{{ Carbon\Carbon::parse($prediksihk->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
        <div class="result medium thunderball-ball"><?php  echo $satu; ?></div>
        <div class="result medium thunderball-ball"><?php  echo $dua; ?></div>
        <div class="result medium thunderball-ball"><?php  echo $tiga; ?></div>
        <div class="result medium thunderball-ball"><?php  echo $empat; ?></div><br>
        <!-- <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasilhongkong') }}">Hasil Lengkap</a> -->
      </div><!-- sideheader -->
      <br><br>
    </div><!-- end resultbox -->
  </div><!-- end col-xs-6 -->
  @endforeach
  </div>
  </div>
@endsection
