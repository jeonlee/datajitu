@extends('layouts.index')

@section('content')

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
    </div><!-- end result-box -->
              
    <div class="resultBox shorter centred visible-xs visible-sm" style="width: 100%;">
      <div class="sideHeader euromillions" style="height: 150px; width: 100%; padding-top:0px; padding-bottom: 0px;">
        <div class="col-xs-12">
          <h3 style="color: #FFF;"><span class="smallerHeading">{{ $singapura->hari }}</span> <br><span class="smallerHeading">{{ $singapura->tanggal }}</span></h3>
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
          

  @foreach ($sorted1->slice(0, 1) as $cambodia)
  <?php

      $satu = substr("$cambodia->number",0,1);
      $dua = substr("$cambodia->number",1,1);
      $tiga = substr("$cambodia->number",2,1);
      $empat = substr("$cambodia->number",3,1);
   ?>
  <div class="col-xs-12" style="margin-top:15px;">
    <h3 class="josefin">TOGEL CAMBODIA</h3>
    <div class="resultBox shorter centred hidden-sm hidden-xs">
      <div class="sideHeader lotto">
        <div class="col-xs-5">
          <img width="100%" src="images/cambodia.png">
        </div>
        <div class="col-xs-7">
          
          <h3 style="color: #FFF;"><span class="smallerHeading">Hasil Keluaran </span><br>{{ $cambodia->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($cambodia->tanggal)->format('d-m-Y') }}</span></h3>
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
          
          <h3 style="color: #FFF;"><span class="smallerHeading">{{ $cambodia->hari }}</span> <br><span class="smallerHeading">{{ $cambodia->tanggal }}</span></h3>
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

  @foreach ($sorted2->slice(0, 1) as $sydney)
  <?php

      $satu = substr("$sydney->number",0,1);
      $dua = substr("$sydney->number",1,1);
      $tiga = substr("$sydney->number",2,1);
      $empat = substr("$sydney->number",3,1);
   ?>
  <div class="col-xs-12" style="margin-top:15px;">
    <h3 class="josefin">TOGEL SYDNEY</h3>
    <div class="resultBox shorter centred hidden-sm hidden-xs">
      <div class="sideHeader hotpicks">
        <div class="col-xs-5">
          <img width="100%" src="images/sydney.png">
        </div>
        <div class="col-xs-7">
          <h3 style="color: #FFF;"><span class="smallerHeading">Hasil Keluaran </span><br>{{ $sydney->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($sydney->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
      </div><!-- sideheader -->
      <div style=" padding: 12px 2px 0 0;" class="floatRight centred">
        <div class="result medium lotto-ball"><?php  echo $satu; ?></div>
        <div class="result medium lotto-ball"><?php  echo $dua; ?></div>
        <div class="result medium lotto-ball"><?php  echo $tiga; ?></div>
        <div class="result medium lotto-ball"><?php  echo $empat; ?></div>
        <br><br>
        <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasilsydney') }}">Hasil Lengkap</a>
      </div>
    </div>
          
    <div class="resultBox shorter centred visible-xs visible-sm" style="width: 100%;">
      <div class="sideHeader hotpicks" style="height: 150px; width: 100%; padding-top:0px; padding-bottom: 0px;">
        <div class="col-xs-12">
          
          <h3 style="color: #FFF;"><span class="smallerHeading">{{ $sydney->hari }}</span> <br><span class="smallerHeading">{{ $sydney->tanggal }}</span></h3>
        </div>
        <div class="result medium lotto-ball"><?php  echo $satu; ?></div>
        <div class="result medium lotto-ball"><?php  echo $dua; ?></div>
        <div class="result medium lotto-ball"><?php  echo $tiga; ?></div>
        <div class="result medium lotto-ball"><?php  echo $empat; ?></div><br>
        <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasilsydney') }}">Hasil Lengkap</a>
      </div><!-- sideheader -->
      <br><br>
    </div><!-- end resultbox -->
    
  </div><!-- end col-xs-6 -->
  @endforeach

  @foreach ($sorted3->slice(0, 1) as $china)
    <?php

        $satu = substr("$china->number",0,1);
        $dua = substr("$china->number",1,1);
        $tiga = substr("$china->number",2,1);
        $empat = substr("$china->number",3,1);
     ?>
  <div class="col-xs-12" style="margin-top:15px;">
    <h3 class="josefin">TOGEL CHINA</h3>
    <div class="resultBox shorter centred hidden-sm hidden-xs">
      <div class="sideHeader health">
        <div class="col-xs-5">
        <img width="100%" src="images/china.png">
      </div>
      <div class="col-xs-7">
        <h3 style="color: #FFF;"><span class="smallerHeading">Hasil Keluaran </span><br>{{ $china->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($china->tanggal)->format('d-m-Y') }}</span></h3>
      </div>
    </div><!-- sideheader -->
    <div style=" padding: 12px 2px 0 0;" class="floatRight centred">
      <div class="result medium health-ball"><?php  echo $satu; ?></div>
      <div class="result medium health-ball"><?php  echo $dua; ?></div>
      <div class="result medium health-ball"><?php  echo $tiga; ?></div>
      <div class="result medium health-ball"><?php  echo $empat; ?></div>
 
      <br><br>
  
      <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasilchina') }}">Hasil Lengkap</a>
    </div>
  </div>
          
  <div class="resultBox shorter centred visible-xs visible-sm" style="width: 100%;">
    <div class="sideHeader health" style="height: 150px; width: 100%; padding-top:0px; padding-bottom: 0px;">
      <div class="col-xs-12">
        
        <h3 style="color: #FFF;"><span class="smallerHeading">{{ $china->hari }}</span> <br><span class="smallerHeading">{{ $china->tanggal }}</span></h3>
      </div>
      <div class="result medium health-ball"><?php  echo $satu; ?></div>
      <div class="result medium health-ball"><?php  echo $dua; ?></div>
      <div class="result medium health-ball"><?php  echo $tiga; ?></div>
      <div class="result medium health-ball"><?php  echo $empat; ?></div><br>
      <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasilchina') }}">Hasil Lengkap</a>
    </div><!-- sideheader -->
    <br><br>
  </div><!-- end resultbox -->
              
              
  </div><!-- end col-xs-6 -->
  @endforeach

  @foreach ($sorted4->slice(0, 1) as $taiwan)
  <?php

      $satu = substr("$taiwan->number",0,1);
      $dua = substr("$taiwan->number",1,1);
      $tiga = substr("$taiwan->number",2,1);
      $empat = substr("$taiwan->number",3,1);
   ?>
  <div class="col-xs-12" style="margin-top:15px;">
    <h3 class="josefin">TOGEL TAIWAN</h3>
    <div class="resultBox shorter centred hidden-sm hidden-xs">
      <div class="sideHeader postcode">
        <div class="col-xs-5">
          <img width="100%" src="images/taiwan.png">
          
        </div>
        <div class="col-xs-7">
          <h3 style="color: #FFF;"><span class="smallerHeading">Hasil Keluaran </span><br>{{ $taiwan->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($taiwan->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
      </div><!-- sideheader -->
      <div style=" padding: 12px 2px 0 0;" class="floatRight centred">
        <div class="result medium euromillions-lucky-star"><?php  echo $satu; ?></div>
        <div class="result medium euromillions-lucky-star"><?php  echo $dua; ?></div>
        <div class="result medium euromillions-lucky-star"><?php  echo $tiga; ?></div>
        <div class="result medium euromillions-lucky-star"><?php  echo $empat; ?></div>
   
        <br><br>
    
        <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasiltaiwan') }}">Hasil Lengkap</a>
      </div>
    </div>
          
    <div class="resultBox shorter centred visible-xs visible-sm" style="width: 100%;">
      <div class="sideHeader postcode" style="height: 150px; width: 100%; padding-top:0px; padding-bottom: 0px;">
        <div class="col-xs-12">
          <h3 style="color: #FFF;"><span class="smallerHeading">{{ $taiwan->hari }}</span> <br><span class="smallerHeading">{{ $taiwan->tanggal }}</span></h3>
        </div>
        <div class="result medium euromillions-lucky-star"><?php  echo $satu; ?></div>
        <div class="result medium euromillions-lucky-star"><?php  echo $dua; ?></div>
        <div class="result medium euromillions-lucky-star"><?php  echo $tiga; ?></div>
        <div class="result medium euromillions-lucky-star"><?php  echo $empat; ?></div><br>
        <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasiltaiwan') }}">Hasil Lengkap</a>
      </div><!-- sideheader -->
      <br><br>
    </div><!-- end resultbox -->
  </div><!-- end col-xs-6 -->
  @endforeach

  @foreach ($sorted5->slice(0, 1) as $hongkong)
  <?php

      $satu = substr("$hongkong->number",0,1);
      $dua = substr("$hongkong->number",1,1);
      $tiga = substr("$hongkong->number",2,1);
      $empat = substr("$hongkong->number",3,1);
   ?>
  <div class="col-xs-12" style="margin-top:15px;">
    <h3 class="josefin">TOGEL HONGKONG</h3>
    <div class="resultBox shorter centred hidden-sm hidden-xs">
      <div class="sideHeader thunderball">
        <div class="col-xs-5">
          <img width="100%" src="images/hk.png">
        
        </div>
        <div class="col-xs-7">
          <h3 style="color: #FFF;"><span class="smallerHeading">Hasil Keluaran </span><br>{{ $hongkong->hari }} <br><span class="smallerHeading">{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</span></h3>
        </div>
      </div><!-- sideheader -->
      <div style=" padding: 12px 2px 0 0;" class="floatRight centred">
        <div class="result medium thunderball-ball"><?php  echo $satu; ?></div>
        <div class="result medium thunderball-ball"><?php  echo $dua; ?></div>
        <div class="result medium thunderball-ball"><?php  echo $tiga; ?></div>
        <div class="result medium thunderball-ball"><?php  echo $empat; ?></div>
        <br><br>
        <a class="button-blue" title="Lottery Results - Lotto" href="{{ url('/hasilhongkong') }}">Hasil Lengkap</a>
      </div>
    </div>
            
    <div class="resultBox shorter centred visible-xs visible-sm" style="width: 100%;">
      <div class="sideHeader thunderball" style="height: 150px; width: 100%; padding-top:0px; padding-bottom: 0px;">
        <div class="col-xs-12">
          <h3 style="color: #FFF;"><span class="smallerHeading">{{ $hongkong->hari }}</span> <br><span class="smallerHeading">{{ $hongkong->tanggal }}</span></h3>
        </div>
        <div class="result medium thunderball-ball"><?php  echo $satu; ?></div>
        <div class="result medium thunderball-ball"><?php  echo $dua; ?></div>
        <div class="result medium thunderball-ball"><?php  echo $tiga; ?></div>
        <div class="result medium thunderball-ball"><?php  echo $empat; ?></div><br>
        <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasilhongkong') }}">Hasil Lengkap</a>
      </div><!-- sideheader -->
      <br><br>
    </div><!-- end resultbox -->
  </div><!-- end col-xs-6 -->
  @endforeach

@endsection
