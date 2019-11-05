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
		    
                    $as=array_count_values($sgp_as);
                    $as_0=$as['0'];
                    $as_1=$as['1'];
                    $as_2=$as['2'];
                    $as_3=$as['3'];
                    $as_4=$as['4'];
                    $as_5=$as['5'];
                    $as_6=$as['6'];
                    $as_7=$as['7'];
                    $as_8=$as['8'];
                    $as_9=$as['9'];
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
            
            <div class="frequency-cointainer">

		<h1>Statistik Keluaran Singapore [30 Undian]</h1>

		<div class="frequency-card">
			<div class="position">AS</div>
			<div class="frequency-graph">

				<div class="frequency-bar">
					<div class="bar" id="bar-0-0" style="height: 30%;"> <div>
						3x</div>
				</div>
				<div class="number">0</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-1" style="height: 20%;"> <div>
						<2x</div>
				</div>
				<div class="number">1</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-2" style="height: 20%;"> <div>
						2x</div>
				</div>
				<div class="number">2</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-3" style="height: 40%;"> <div>
						4x</div>
				</div>
				<div class="number">3</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-4" style="height: 30%;"> <div>
						3x</div>
				</div>
				<div class="number">4</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-5" style="height: 0%;"> <div>
						</div>
				</div>
				<div class="number">5</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-6" style="height: 50%;"> <div>
						5x</div>
				</div>
				<div class="number">6</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-7" style="height: 30%;"> <div>
						3x</div>
				</div>
				<div class="number">7</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-8" style="height: 20%;"> <div>
						2x</div>
				</div>
				<div class="number">8</div>
			</div>

				<div class="frequency-bar">
					<div class="bar" id="bar-0-9" style="height: 60%;"> <div>
						6x</div>
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
					<td>Besar</td>
					<td>Rata</td>
				</tr>
			</tbody>
		</table>
		</div>

		<div class="frequency-card">
		<div class="position">KOP</div>
		<div class="frequency-graph">

			<div class="frequency-bar">
				<div class="bar" id="bar-1-0" style="height: 40%;"> <div>
					4x</div>
			</div>
			<div class="number">0</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-1" style="height: 50%;"> <div>
					5x</div>
			</div>
			<div class="number">1</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-2" style="height: 30%;"> <div>
					3x</div>
			</div>
			<div class="number">2</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-3" style="height: 10%;"> <div>
					1x</div>
			</div>
			<div class="number">3</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-4" style="height: 30%;"> <div>
					3x</div>
			</div>
			<div class="number">4</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-5" style="height: 20%;"> <div>
					2x</div>
			</div>
			<div class="number">5</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-6" style="height: 30%;"> <div>
					3x</div>
			</div>
			<div class="number">6</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-7" style="height: 20%;"> <div>
					2x</div>
			</div>
			<div class="number">7</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-8" style="height: 10%;"> <div>
					1x</div>
			</div>
			<div class="number">8</div>
		</div>

			<div class="frequency-bar">
				<div class="bar" id="bar-1-9" style="height: 60%;"> <div>
					6x</div>
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
				<td>Kecil</td>
				<td>Ganjil</td>
			</tr>
		</tbody>
		</table>
		</div>

		<div class="frequency-card">
		<div class="position">KEPALA</div>
		<div class="frequency-graph">

		<div class="frequency-bar">
			<div class="bar" id="bar-2-0" style="height: 60%;"> <div>
				6x</div>
		</div>
		<div class="number">0</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-1" style="height: 40%;"> <div>
				4x</div>
		</div>
		<div class="number">1</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-2" style="height: 20%;"> <div>
				2x</div>
		</div>
		<div class="number">2</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-3" style="height: 10%;"> <div>
				1x</div>
		</div>
		<div class="number">3</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-4" style="height: 60%;"> <div>
				6x</div>
		</div>
		<div class="number">4</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-5" style="height: 10%;"> <div>
				1x</div>
		</div>
		<div class="number">5</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-6" style="height: 20%;"> <div>
				2x</div>
		</div>
		<div class="number">6</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-7" style="height: 20%;"> <div>
				2x</div>
		</div>
		<div class="number">7</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-8" style="height: 30%;"> <div>
				3x</div>
		</div>
		<div class="number">8</div>
		</div>

		<div class="frequency-bar">
			<div class="bar" id="bar-2-9" style="height: 30%;"> <div>
				3x</div>
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
			<td>Kecil</td>
			<td>Genap</td>
		</tr>
		</tbody>
		</table>
		</div>


		<div class="frequency-card">
		<div class="position">EKOR</div>
		<div class="frequency-graph">

		<div class="frequency-bar">
		<div class="bar" id="bar-3-0" style="height: 50%;"> <div>
			5x</div>
		</div>
		<div class="number">0</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-1" style="height: 50%;"> <div>
			5x</div>
		</div>
		<div class="number">1</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-2" style="height: 40%;"> <div>
			4x</div>
		</div>
		<div class="number">2</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-3" style="height: 20%;"> <div>
			2x</div>
		</div>
		<div class="number">3</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-4" style="height: 40%;"> <div>
			4x</div>
		</div>
		<div class="number">4</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-5" style="height: 40%;"> <div>
			4x</div>
		</div>
		<div class="number">5</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-6" style="height: 10%;"> <div>
			1x</div>
		</div>
		<div class="number">6</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-7" style="height: 30%;"> <div>
			3x</div>
		</div>
		<div class="number">7</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-8" style="height: 20%;"> <div>
			2x</div>
		</div>
		<div class="number">8</div>
		</div>

		<div class="frequency-bar">
		<div class="bar" id="bar-3-9" style="height: 0%;"> <div>
			</div>
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
		<td>Kecil</td>
		<td>Genap</td>
		</tr>
		</tbody>
		</table>
			</div>

		</div>

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
