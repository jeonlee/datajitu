@extends('layouts.index')

@section('content')
      
    <div class="panel panel-primary">
        <div class="panel-heading p15 black font">
          	<div class="panel-title">
            	<h3>HASIL KELUARAN TOGEL TAIWAN</h3>
          	</div>
        </div>

        <div class="panel-body">
            @foreach ($sorted->slice(0, 1) as $taiwan)
             <?php
		        $satu = substr("$taiwan->number",0,1);
		        $dua = substr("$taiwan->number",1,1);
		        $tiga = substr("$taiwan->number",2,1);
		        $empat = substr("$taiwan->number",3,1);

		        $as=array_count_values($twn_as);
		        $kop=array_count_values($twn_kop);
		        $kepala=array_count_values($twn_kepala);
		        $ekor=array_count_values($twn_ekor);
		        $percent_as=implode(",",$arr_as);
		        $percent_kop=implode(",",$arr_kop);
		        $percent_kepala=implode(",",$arr_kepala);
		        $percent_ekor=implode(",",$arr_ekor);
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
                <div style=" padding: 12px 30px 0 0;" class="floatRight centred">
                  <div class="result medium euromillions-lucky-star"><?php  echo $satu; ?></div>
                  <div class="result medium euromillions-lucky-star"><?php  echo $dua; ?></div>
                  <div class="result medium euromillions-lucky-star"><?php  echo $tiga; ?></div>
                  <div class="result medium euromillions-lucky-star"><?php  echo $empat; ?></div>
             
                  <br><br>
          
                </div>
              </div>

              <div class="col-xs-8 col-xs-offset-2 hidden-sm hidden-xs">
              <div class="col-xs-6 text-center">
              <a class="button-grey" title="Lottery Results - Lotto" href="{{ url('/prediksisgp') }}">Prediksi Selanjutnya</a>
              </div>
              <div class="col-xs-6 text-center">
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
                  <div class="result medium euromillions-lucky-star"><?php  echo $empat; ?></div>
                  <a class="button-blue-mobile" title="Lottery Results - Lotto" href="{{ url('/hasiltaiwan') }}">Hasil Lengkap</a>
                </div><!-- sideheader -->
                <br><br>
                </div><!-- end resultbox -->

        	<div class="frequency-cointainer">
				<h1>Statistik Keluaran Taiwan [30 Undian]</h1>
				<div class="frequency-card">
					<div class="position">AS</div>
						<div class="frequency-graph">

				<div class="frequency-bar">
					<div class="bar" id="bar-0-0"> <div>
						{{ (!empty($as['0'])) ? $as['0'] : '0' }}x</div>
				</div>
				<div class="number">0</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-1"> <div>
						{{ (!empty($as['1'])) ? $as['1'] : '0' }}x</div>
				</div>
				<div class="number">1</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-2"> <div>
						{{ (!empty($as['2'])) ? $as['2'] : '0' }}x</div>
				</div>
				<div class="number">2</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-3"> <div>
						{{ (!empty($as['3'])) ? $as['3'] : '0' }}x</div>
				</div>
				<div class="number">3</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-4"> <div>
						{{ (!empty($as['4'])) ? $as['4'] : '0' }}x</div>
				</div>
				<div class="number">4</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-5"> <div>
						{{ (!empty($as['5'])) ? $as['5'] : '0' }}x</div>
				</div>
				<div class="number">5</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-6"> <div>
						{{ (!empty($as['6'])) ? $as['6'] : '0' }}x</div>
				</div>
				<div class="number">6</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-7"> <div>
						{{ (!empty($as['7'])) ? $as['7'] : '0' }}x</div>
				</div>
				<div class="number">7</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-8"> <div>
						{{ (!empty($as['8'])) ? $as['8'] : '0' }}x</div>
				</div>
				<div class="number">8</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-9"> <div>
						{{ (!empty($as['9'])) ? $as['9'] : '0' }}x</div>
				</div>
				<div class="number">9</div>
			</div>

		</div>
		<br>
		<table class="prediksi-table">
			<tbody>
				<tr>
					<th colspan="2">Majoritas</th>
				</tr>
				<tr>
					<td>{{ $majoritas_as }}</td>
					<td>{{ $gg_as }}</td>
				</tr>
			</tbody>
		</table>
		</div>

		<div class="frequency-card">
		<div class="position">KOP</div>
		<div class="frequency-graph">

			<div class="frequency-bar">
				<div class="bar" id="bar-1-0"> <div>
					{{ (!empty($kop['0'])) ? $kop['0'] : '0' }}x</div>
			</div>
			<div class="number">0</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-1"> <div>
					{{ (!empty($kop['1'])) ? $kop['1'] : '0' }}x</div>
			</div>
			<div class="number">1</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-2"> <div>
					{{ (!empty($kop['2'])) ? $kop['2'] : '0' }}x</div>
			</div>
			<div class="number">2</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-3"> <div>
					{{ (!empty($kop['3'])) ? $kop['3'] : '0' }}x</div>
			</div>
			<div class="number">3</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-4"> <div>
					{{ (!empty($kop['4'])) ? $kop['4'] : '0' }}x</div>
			</div>
			<div class="number">4</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-5"> <div>
					{{ (!empty($kop['5'])) ? $kop['5'] : '0' }}x</div>
			</div>
			<div class="number">5</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-6"> <div>
					{{ (!empty($kop['6'])) ? $kop['6'] : '0' }}x</div>
			</div>
			<div class="number">6</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-7"> <div>
					{{ (!empty($kop['7'])) ? $kop['7'] : '0' }}x</div>
			</div>
			<div class="number">7</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-8"> <div>
					{{ (!empty($kop['8'])) ? $kop['8'] : '0' }}x</div>
			</div>
			<div class="number">8</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-9"> <div>
					{{ (!empty($kop['9'])) ? $kop['9'] : '0' }}x</div>
			</div>
			<div class="number">9</div>
		</div>

		</div>
		<br>
		<table class="prediksi-table">
		<tbody>
			<tr>
				<th colspan="2">Majoritas</th>
			</tr>
			<tr>
				<td>{{ $majoritas_kop }}</td>
				<td>{{ $gg_kop }}</td>
			</tr>
		</tbody>
		</table>
		</div>

		<div class="frequency-card">
		<div class="position">KEPALA</div>
		<div class="frequency-graph">

		<div class="frequency-bar">
			<div class="bar" id="bar-2-0"> <div>
				{{ (!empty($kepala['0'])) ? $kepala['0'] : '0' }}x</div>
		</div>
		<div class="number">0</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-1"> <div>
				{{ (!empty($kepala['1'])) ? $kepala['1'] : '0' }}x</div>
		</div>
		<div class="number">1</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-2"> <div>
				{{ (!empty($kepala['2'])) ? $kepala['2'] : '0' }}x</div>
		</div>
		<div class="number">2</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-3"> <div>
				{{ (!empty($kepala['3'])) ? $kepala['3'] : '0' }}x</div>
		</div>
		<div class="number">3</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-4"> <div>
				{{ (!empty($kepala['4'])) ? $kepala['4'] : '0' }}x</div>
		</div>
		<div class="number">4</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-5"> <div>
				{{ (!empty($kepala['5'])) ? $kepala['5'] : '0' }}x</div>
		</div>
		<div class="number">5</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-6"> <div>
				{{ (!empty($kepala['6'])) ? $kepala['6'] : '0' }}x</div>
		</div>
		<div class="number">6</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-7"> <div>
				{{ (!empty($kepala['7'])) ? $kepala['7'] : '0' }}x</div>
		</div>
		<div class="number">7</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-8"> <div>
				{{ (!empty($kepala['8'])) ? $kepala['8'] : '0' }}x</div>
		</div>
		<div class="number">8</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-9"> <div>
				{{ (!empty($kepala['9'])) ? $kepala['9'] : '0' }}x</div>
		</div>
		<div class="number">9</div>
		</div>

		</div>
		<br>
		<table class="prediksi-table">
		<tbody>
		<tr>
			<th colspan="2">Majoritas</th>
		</tr>
		<tr>
			<td>{{ $majoritas_kepala }}</td>
			<td>{{ $gg_kepala }}</td>
		</tr>
		</tbody>
		</table>
		</div>


		<div class="frequency-card">
		<div class="position">EKOR</div>
		<div class="frequency-graph">

		<div class="frequency-bar">
		<div class="bar" id="bar-3-0"> <div>
			{{ (!empty($ekor['0'])) ? $ekor['0'] : '0' }}x</div>
		</div>
		<div class="number">0</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-1"> <div>
			{{ (!empty($ekor['1'])) ? $ekor['1'] : '0' }}x</div>
		</div>
		<div class="number">1</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-2"> <div>
			{{ (!empty($ekor['2'])) ? $ekor['2'] : '0' }}x</div>
		</div>
		<div class="number">2</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-3"> <div>
			{{ (!empty($ekor['3'])) ? $ekor['3'] : '0' }}x</div>
		</div>
		<div class="number">3</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-4"> <div>
			{{ (!empty($ekor['4'])) ? $ekor['4'] : '0' }}x</div>
		</div>
		<div class="number">4</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-5"> <div>
			{{ (!empty($ekor['5'])) ? $ekor['5'] : '0' }}x</div>
		</div>
		<div class="number">5</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-6"> <div>
			{{ (!empty($ekor['6'])) ? $ekor['6'] : '0' }}x</div>
		</div>
		<div class="number">6</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-7"> <div>
			{{ (!empty($ekor['7'])) ? $ekor['7'] : '0' }}x</div>
		</div>
		<div class="number">7</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-8"> <div>
			{{ (!empty($ekor['8'])) ? $ekor['8'] : '0' }}x</div>
		</div>
		<div class="number">8</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-9"> <div>
			{{ (!empty($ekor['9'])) ? $ekor['9'] : '0' }}x</div>
		</div>
		<div class="number">9</div>
		</div>

		</div>
		<br>
		<table class="prediksi-table">
		<tbody>
		<tr>
		<th colspan="2">Majoritas</th>
		</tr>
		<tr>
		<td>{{ $majoritas_ekor }}</td>
		<td>{{ $gg_ekor }}</td>
		</tr>
		</tbody>
		</table>
			</div>

		</div>

            </div>

             @endforeach
	     
	   
	


                </div>
              </div>
            </div><!-- col-xs-9 -->    

      


    </div>
  </div>
</div>
<script> // AS
	var drawAs = "<?php echo $percent_as; ?>".split(",");
	for (let i = 0; i < 10; i++) {
		setTimeout(() => {
			document.getElementById("bar-0-" + i).style.height = drawAs[i] / 30 * 300 + "%"
		}, 750)
	}
</script>
<script> // KOP
	var drawKop = "<?php echo $percent_kop; ?>".split(",");
	for (let i = 0; i < 10; i++) {
		setTimeout(() => {
			document.getElementById("bar-1-" + i).style.height = drawKop[i] / 30 * 300 + "%"
		}, 750)
	}
</script>
<script> // KEPALA
	var drawKepala = "<?php echo $percent_kepala; ?>".split(",");
	for (let i = 0; i < 10; i++) {
		setTimeout(() => {
			document.getElementById("bar-2-" + i).style.height = drawKepala[i] / 30 * 300 + "%"
		}, 750)
	}
</script>
<script> // EKOR
	var drawEkor = "<?php echo $percent_ekor; ?>".split(",");
	for (let i = 0; i < 10; i++) {
		setTimeout(() => {
			document.getElementById("bar-3-" + i).style.height = drawEkor[i] / 30 * 300 + "%"
		}, 750)
	}
</script>
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
