@extends('layouts.index')

@section('content')
  <div class="panel panel-primary">
                <div class="panel-heading p15 black font">
                  <div class="panel-title">
                    <h3>ANALISIS TOGEL HONGKONG</h3>
                  </div>
                </div>

                <div class="panel-body p15">
                <form method="POST" action="/searchResultHongkong-m">
    {{ csrf_field() }}
      <div class="form-group" style="overflow:hidden;">
        <div class="col-xs-6">
          Dari :
          <div style="overflow:hidden;" class="form-group">
            <input type="text" name="startDate" id="from" class="form-control input-sm" placeholder="dd-mm-yyyy">
        </div>
        </div>
        <div class="col-xs-6">
          Sampai :
          <div style="overflow:hidden;" class="form-group">
            <input type="text" class="input-sm form-control" name="endDate" id="to" placeholder="dd-mm-yyyy">
        </div>
      </div> 
      </div>
      <button type="submit">Submit</button>
    </form>
    <div class="col-xs-12" style="padding:0px;">
                <div class="col-xs-12" style="padding:0px;">
                <nav class=" navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    
    <div class="navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav horizontal-nav">
        <li class="active"><a href="#4d" data-toggle="tab">4D<span style="font-size:16px;"  class="pull-right hidden-xs showopacity"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Besar-Kecil <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a data-toggle="tab" href="#besarkecilas">As</a></li>
            <li><a data-toggle="tab" href="#besarkecilkop">Kop</a></li>
            <li><a data-toggle="tab" href="#besarkecilkepala">Kepala</a></li>
            
            <li><a data-toggle="tab" href="#besarkecilekor">Ekor</a></li>
            
          </ul>
        </li>          
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Colok-Jitu <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a data-toggle="tab" href="#colokjituas">As</a></li>
            <li><a data-toggle="tab" href="#colokjitukop">Kop</a></li>
            <li><a data-toggle="tab" href="#colokjitukepala">Kepala</a></li>
            
            <li><a data-toggle="tab" href="#colokjituekor">Ekor</a></li>
            
          </ul>
        </li>
        <li ><a data-toggle="tab" href="#dasarbesarkecil">Dasar Besar-Kecil<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
        <li ><a data-toggle="tab" href="#dasarganjilgenap">Dasar Ganjil-Genap<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ganjil-Genap <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a data-toggle="tab" href="#ganjilgenapas">As</a></li>
            <li><a data-toggle="tab" href="#ganjilgenapkop">Kop</a></li>
            <li><a data-toggle="tab" href="#ganjilgenapkepala">Kepala</a></li>
            
            <li><a data-toggle="tab" href="#ganjilgenapekor">Ekor</a></li>
            
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kembang-Kempis <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a data-toggle="tab" href="#kembangkempisdepan">Depan</a></li>
            <li><a data-toggle="tab" href="#kembangkempistengah">Tengah</a></li>
            <li><a data-toggle="tab" href="#kembangkempisbelakang">Belakang</a></li>
            
            
          </ul>
        </li>
        <li ><a data-toggle="tab" href="#shio">Shio<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Silang-Homo <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a data-toggle="tab" href="#silanghomodepan">Depan</a></li>
            <li><a data-toggle="tab" href="#silanghomotengah">Tengah</a></li>
            <li><a data-toggle="tab" href="#silanghomobelakang">Belakang</a></li>
            
            
          </ul>
        </li>
        <li ><a data-toggle="tab" href="#tengahtepi">Tengah-Tepi<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>

      </ul>
    </div>
  </div>
</nav>
</div>
      <div class="col-xs-12">
        <div class="tab-content">
        <div class="tab-pane active" id="4d">
          <h5 style="font-weight:bold;">Analisis Data 4D Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        
                    </tr>
                </thead>
                <tbody>
                  @foreach ($hongkongs as $hongkong)
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            
                        </tr>
                        
                        @endforeach
                                    </tbody>
            </table>
            </div>
        </div><!-- end-4d -->

        <div class="tab-pane" id="besarkecilas">
          <h5 style="font-weight:bold;">Analisis Data Besar Kecil As Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Besar</th>
                        <th>Kecil</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                 ?>
                 <?php
                     if ($satu >= 5) { $satux1 = "&#x2714;"; } else { $satux1 = ""; }

                     if ($satu < 5) { $satux2 = "&#x2714;"; }  else { $satux2 = ""; }
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $satux1; ?></td>
                            <td><?php  echo $satux2; ?></td>
                        </tr>
                         @endforeach
                                    </tbody>
            </table>
            </div>
        </div><!-- end-besarkecilas -->

        <div class="tab-pane" id="besarkecilkop">
          <h5 style="font-weight:bold;">Analisis Data Besar Kecil Kop Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Besar</th>
                        <th>Kecil</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                 ?>
                 <?php
                     if ($dua >= 5) { $duax1 = "&#x2714;"; } else { $duax1 = ""; }

                     if ($dua < 5) { $duax2 = "&#x2714;"; }  else { $duax2 = ""; }
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $duax1; ?></td>
                            <td><?php  echo $duax2; ?></td>
                        </tr>
                         @endforeach
                                    </tbody>
            </table>
            </div>
        </div><!-- end-besarkecilkop -->

        <div class="tab-pane" id="besarkecilkepala">
          <h5 style="font-weight:bold;">Analisis Data Besar Kecil Kepala Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Besar</th>
                        <th>Kecil</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                 ?>
                 <?php
                     if ($tiga >= 5) { $tigax1 = "&#x2714;"; } else { $tigax1 = ""; }

                     if ($tiga < 5) { $tigax2 = "&#x2714;"; }  else { $tigax2 = ""; }
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $tigax1; ?></td>
                            <td><?php  echo $tigax2; ?></td>
                        </tr>
                         @endforeach
                                    </tbody>
            </table>
            </div>
        </div><!-- end-besarkecilkepala -->

        <div class="tab-pane" id="besarkecilekor">
          <h5 style="font-weight:bold;">Analisis Data Besar Kecil Ekor Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Besar</th>
                        <th>Kecil</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                 ?>
                 <?php
                     if ($empat >= 5) { $empatx1 = "&#x2714;"; } else { $empatx1 = ""; }

                     if ($empat < 5) { $empatx2 = "&#x2714;"; }  else { $empatx2 = ""; }
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $empatx1; ?></td>
                            <td><?php  echo $empatx2; ?></td>
                        </tr>
                         @endforeach
                                    </tbody>
            </table>
            </div>
        </div><!-- end-besarkecilekor -->

        <div class="tab-pane" id="colokjituas">
          <h5 style="font-weight:bold;">Analisis Data Colok Jitu As Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>0</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                    <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);

                 ?>
                 <?php
                     if ($satu == 0) $cjas0 = "&#x2714;";  else  $cjas0 = ""; 

                     if ($satu == 1)  $cjas1 = "&#x2714;";   else  $cjas1 = ""; 
                     if ($satu == 2)  $cjas2 = "&#x2714;";   else  $cjas2 = ""; 
                     if ($satu == 3)  $cjas3 = "&#x2714;";   else  $cjas3 = ""; 
                     if ($satu == 4)  $cjas4 = "&#x2714;";   else  $cjas4 = ""; 
                     if ($satu == 5)  $cjas5 = "&#x2714;";   else  $cjas5 = ""; 
                     if ($satu == 6)  $cjas6 = "&#x2714;";   else  $cjas6 = ""; 
                     if ($satu == 7)  $cjas7 = "&#x2714;";   else  $cjas7 = ""; 
                     if ($satu == 8)  $cjas8 = "&#x2714;";   else  $cjas8 = ""; 
                     if ($satu == 9)  $cjas9 = "&#x2714;";   else  $cjas9 = ""; 
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $cjas0; ?></td>
                            <td><?php  echo $cjas1; ?></td>
                            <td><?php  echo $cjas2; ?></td>
                            <td><?php  echo $cjas3; ?></td>
                            <td><?php  echo $cjas4; ?></td>
                            <td><?php  echo $cjas5; ?></td>
                            <td><?php  echo $cjas6; ?></td>
                            <td><?php  echo $cjas7; ?></td>
                            <td><?php  echo $cjas8; ?></td>
                            <td><?php  echo $cjas9; ?></td>

                        </tr>
                @endforeach         
                </tbody>
            </table>
            </div>
        </div><!-- end-colokjituas -->

        <div class="tab-pane" id="colokjitukop">
          <h5 style="font-weight:bold;">Analisis Data Colok Jitu Kop Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>0</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                    <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);

                 ?>
                 <?php
                     if ($dua == 0) $cjkop0 = "&#x2714;";  else  $cjkop0 = ""; 

                     if ($dua == 1)  $cjkop1 = "&#x2714;";   else  $cjkop1 = ""; 
                     if ($dua == 2)  $cjkop2 = "&#x2714;";   else  $cjkop2 = ""; 
                     if ($dua == 3)  $cjkop3 = "&#x2714;";   else  $cjkop3 = ""; 
                     if ($dua == 4)  $cjkop4 = "&#x2714;";   else  $cjkop4 = ""; 
                     if ($dua == 5)  $cjkop5 = "&#x2714;";   else  $cjkop5 = ""; 
                     if ($dua == 6)  $cjkop6 = "&#x2714;";   else  $cjkop6 = ""; 
                     if ($dua == 7)  $cjkop7 = "&#x2714;";   else  $cjkop7 = ""; 
                     if ($dua == 8)  $cjkop8 = "&#x2714;";   else  $cjkop8 = ""; 
                     if ($dua == 9)  $cjkop9 = "&#x2714;";   else  $cjkop9 = ""; 
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $cjkop0; ?></td>
                            <td><?php  echo $cjkop1; ?></td>
                            <td><?php  echo $cjkop2; ?></td>
                            <td><?php  echo $cjkop3; ?></td>
                            <td><?php  echo $cjkop4; ?></td>
                            <td><?php  echo $cjkop5; ?></td>
                            <td><?php  echo $cjkop6; ?></td>
                            <td><?php  echo $cjkop7; ?></td>
                            <td><?php  echo $cjkop8; ?></td>
                            <td><?php  echo $cjkop9; ?></td>

                        </tr>
                @endforeach         
                </tbody>
            </table>
            </div>
        </div><!-- end-colokjitukop -->

        <div class="tab-pane" id="colokjitukepala">
          <h5 style="font-weight:bold;">Analisis Data Colok Jitu Kepala Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>0</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                    <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);

                 ?>
                 <?php
                     if ($tiga == 0) $cjkepala0 = "&#x2714;";  else  $cjkepala0 = ""; 

                     if ($tiga == 1)  $cjkepala1 = "&#x2714;";   else  $cjkepala1 = ""; 
                     if ($tiga == 2)  $cjkepala2 = "&#x2714;";   else  $cjkepala2 = ""; 
                     if ($tiga == 3)  $cjkepala3 = "&#x2714;";   else  $cjkepala3 = ""; 
                     if ($tiga == 4)  $cjkepala4 = "&#x2714;";   else  $cjkepala4 = ""; 
                     if ($tiga == 5)  $cjkepala5 = "&#x2714;";   else  $cjkepala5 = ""; 
                     if ($tiga == 6)  $cjkepala6 = "&#x2714;";   else  $cjkepala6 = ""; 
                     if ($tiga == 7)  $cjkepala7 = "&#x2714;";   else  $cjkepala7 = ""; 
                     if ($tiga == 8)  $cjkepala8 = "&#x2714;";   else  $cjkepala8 = ""; 
                     if ($tiga == 9)  $cjkepala9 = "&#x2714;";   else  $cjkepala9 = ""; 
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $cjkepala0; ?></td>
                            <td><?php  echo $cjkepala1; ?></td>
                            <td><?php  echo $cjkepala2; ?></td>
                            <td><?php  echo $cjkepala3; ?></td>
                            <td><?php  echo $cjkepala4; ?></td>
                            <td><?php  echo $cjkepala5; ?></td>
                            <td><?php  echo $cjkepala6; ?></td>
                            <td><?php  echo $cjkepala7; ?></td>
                            <td><?php  echo $cjkepala8; ?></td>
                            <td><?php  echo $cjkepala9; ?></td>

                        </tr>
                @endforeach         
                </tbody>
            </table>
            </div>
        </div><!-- end-colokjitukepala -->

        <div class="tab-pane" id="colokjituekor">
          <h5 style="font-weight:bold;">Analisis Data Colok Jitu Ekor Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>0</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                    <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);

                 ?>
                 <?php
                     if ($empat == 0) $cjekor0 = "&#x2714;";  else  $cjekor0 = ""; 

                     if ($empat == 1)  $cjekor1 = "&#x2714;";   else  $cjekor1 = ""; 
                     if ($empat == 2)  $cjekor2 = "&#x2714;";   else  $cjekor2 = ""; 
                     if ($empat == 3)  $cjekor3 = "&#x2714;";   else  $cjekor3 = ""; 
                     if ($empat == 4)  $cjekor4 = "&#x2714;";   else  $cjekor4 = ""; 
                     if ($empat == 5)  $cjekor5 = "&#x2714;";   else  $cjekor5 = ""; 
                     if ($empat == 6)  $cjekor6 = "&#x2714;";   else  $cjekor6 = ""; 
                     if ($empat == 7)  $cjekor7 = "&#x2714;";   else  $cjekor7 = ""; 
                     if ($empat == 8)  $cjekor8 = "&#x2714;";   else  $cjekor8 = ""; 
                     if ($empat == 9)  $cjekor9 = "&#x2714;";   else  $cjekor9 = ""; 
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $cjekor0; ?></td>
                            <td><?php  echo $cjekor1; ?></td>
                            <td><?php  echo $cjekor2; ?></td>
                            <td><?php  echo $cjekor3; ?></td>
                            <td><?php  echo $cjekor4; ?></td>
                            <td><?php  echo $cjekor5; ?></td>
                            <td><?php  echo $cjekor6; ?></td>
                            <td><?php  echo $cjekor7; ?></td>
                            <td><?php  echo $cjekor8; ?></td>
                            <td><?php  echo $cjekor9; ?></td>

                        </tr>
                @endforeach         
                </tbody>
            </table>
            </div>
        </div><!-- end-colokjituekor -->

        <div class="tab-pane" id="dasarbesarkecil">
          <h5 style="font-weight:bold;">Analisis Data Dasar Besar Kecil Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Besar</th>
                        <th>Kecil</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    $dasarbk = $tiga + $empat;
                    $dasarbk3 = substr("$dasarbk",0,1);
                    $dasarbk4 = substr("$dasarbk",1,1);
                    $dasarbk5 = $dasarbk3 + $dasarbk4;

                 ?>
                 <?php
                     if ($dasarbk5 >= 5) { $dasarbkbesar = "&#x2714;"; } else { $dasarbkbesar = ""; }

                     if ($dasarbk5 < 5) { $dasarbkkecil = "&#x2714;"; }  else { $dasarbkkecil = ""; }
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $dasarbkbesar; ?></td>
                            <td><?php  echo $dasarbkkecil; ?></td>
                        </tr>
                @endforeach
                                    </tbody>
            </table>
            </div>
        </div><!-- end-dasarbesarkecil -->

        <div class="tab-pane" id="dasarganjilgenap">
          <h5 style="font-weight:bold;">Analisis Data Dasar Ganjil Genap Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Ganjil</th>
                        <th>Genap</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    $dasargg = $tiga + $empat;
                    $dasargg3 = substr("$dasargg",0,1);
                    $dasargg4 = substr("$dasargg",1,1);
                    $dasargg5 = $dasargg3 + $dasargg4;
                    $dasargg1 = $dasargg5 % 2;
                    $dg = 0;
                 ?>
                 <?php
                     if ($dasargg1 == $dg) { $dasargggenap = "&#x2714;"; } else { $dasargggenap = ""; }

                     if ($dasargg1 == $dg) { $dasarggganjil = ""; }  else { $dasarggganjil = "&#x2714;"; }
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $dasarggganjil; ?></td>
                            <td><?php  echo $dasargggenap; ?></td>
                        </tr>
                     @endforeach
                                    </tbody>
            </table>
            </div>
        </div><!-- end-dasarganjilgenap -->

        <div class="tab-pane" id="ganjilgenapas">
          <h5 style="font-weight:bold;">Analisis Data Ganjil Genap As Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Ganjil</th>
                        <th>Genap</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    $asgg = $satu % 2;
                    $dg = 0;
                 ?>
                 <?php
                     if ($asgg == $dg) { $asgggenap = "&#x2714;"; } else { $asgggenap = ""; }

                     if ($asgg == $dg) { $asggganjil = ""; }  else { $asggganjil = "&#x2714;"; }
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $asggganjil; ?></td>
                            <td><?php  echo $asgggenap; ?></td>
                        </tr>
                @endforeach       
                                    </tbody>
            </table>
            </div>
        </div><!-- end-ganjilgenapas -->

        <div class="tab-pane" id="ganjilgenapkop">
          <h5 style="font-weight:bold;">Analisis Data Ganjil Genap Kop Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Ganjil</th>
                        <th>Genap</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    $kopgg = $dua % 2;
                    $dg = 0;
                 ?>
                 <?php
                     if ($kopgg == $dg) { $kopgggenap = "&#x2714;"; } else { $kopgggenap = ""; }

                     if ($kopgg == $dg) { $kopggganjil = ""; }  else { $kopggganjil = "&#x2714;"; }
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $kopggganjil; ?></td>
                            <td><?php  echo $kopgggenap; ?></td>
                        </tr>
                @endforeach       
                                    </tbody>
            </table>
            </div>
        </div><!-- end-ganjilgenapkop -->

        <div class="tab-pane" id="ganjilgenapkepala">
          <h5 style="font-weight:bold;">Analisis Data Ganjil Genap Kepala Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Ganjil</th>
                        <th>Genap</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    $kepalagg = $tiga % 2;
                    $dg = 0;
                 ?>
                 <?php
                     if ($kepalagg == $dg) { $kepalagggenap = "&#x2714;"; } else { $kepalagggenap = ""; }

                     if ($kepalagg == $dg) { $kepalaggganjil = ""; }  else { $kepalaggganjil = "&#x2714;"; }
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $kepalaggganjil; ?></td>
                            <td><?php  echo $kepalagggenap; ?></td>
                        </tr>
                @endforeach       
                                    </tbody>
            </table>
            </div>
        </div><!-- end-ganjilgenapkepala -->

        <div class="tab-pane" id="ganjilgenapekor">
          <h5 style="font-weight:bold;">Analisis Data Ganjil Genap Ekor Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Ganjil</th>
                        <th>Genap</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    $ekorgg = $empat % 2;
                    $dg = 0;
                 ?>
                 <?php
                     if ($ekorgg == $dg) { $ekorgggenap = "&#x2714;"; } else { $ekorgggenap = ""; }

                     if ($ekorgg == $dg) { $ekorggganjil = ""; }  else { $ekorggganjil = "&#x2714;"; }
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $ekorggganjil; ?></td>
                            <td><?php  echo $ekorgggenap; ?></td>
                        </tr>
                @endforeach       
                                    </tbody>
            </table>
            </div>
        </div><!-- end-ganjilgenapekor -->

        <div class="tab-pane" id="kembangkempisdepan">
          <h5 style="font-weight:bold;">Analisis Data Kembang Kempis Depan Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Kembang</th>
                        <th>Kempis</th>
                        <th>Kembar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    
                    
                 ?>
                 <?php
                     if ($satu == $dua) { $kembarkk = "&#x2714;"; } else { $kembarkk = ""; }

                     if ($satu < $dua) { $kembangkk = "&#x2714;"; }  else { $kembangkk = ""; }

                     if ($satu > $dua) { $kempiskk = "&#x2714;"; }  else { $kempiskk = ""; }
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $kembangkk; ?></td>
                            <td><?php  echo $kempiskk; ?></td>
                            <td><?php  echo $kembarkk; ?></td>
                        </tr>
                @endforeach        
                                    </tbody>
            </table>
            </div>
        </div><!-- end-kembangkempisdepan -->

        <div class="tab-pane" id="kembangkempistengah">
          <h5 style="font-weight:bold;">Analisis Data Kembang Kempis Tengah Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Kembang</th>
                        <th>Kempis</th>
                        <th>Kembar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    
                    
                 ?>
                 <?php
                     if ($dua == $tiga) { $kembarkk = "&#x2714;"; } else { $kembarkk = ""; }

                     if ($dua < $tiga) { $kembangkk = "&#x2714;"; }  else { $kembangkk = ""; }

                     if ($dua > $tiga) { $kempiskk = "&#x2714;"; }  else { $kempiskk = ""; }
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $kembangkk; ?></td>
                            <td><?php  echo $kempiskk; ?></td>
                            <td><?php  echo $kembarkk; ?></td>
                        </tr>
                @endforeach        
                                    </tbody>
            </table>
            </div>
        </div><!-- end-kembangkempistengah -->

        <div class="tab-pane" id="kembangkempisbelakang">
          <h5 style="font-weight:bold;">Analisis Data Kembang Kempis Belakang Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Kembang</th>
                        <th>Kempis</th>
                        <th>Kembar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    
                    
                 ?>
                 <?php
                     if ($tiga == $empat) { $kembarkk = "&#x2714;"; } else { $kembarkk = ""; }

                     if ($tiga < $empat) { $kembangkk = "&#x2714;"; }  else { $kembangkk = ""; }

                     if ($tiga > $empat) { $kempiskk = "&#x2714;"; }  else { $kempiskk = ""; }
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $kembangkk; ?></td>
                            <td><?php  echo $kempiskk; ?></td>
                            <td><?php  echo $kembarkk; ?></td>
                        </tr>
                @endforeach        
                                    </tbody>
            </table>
            </div>
        </div><!-- end-kembangkempisbelakang -->

        <div class="tab-pane" id="shio">
          <h5 style="font-weight:bold;">Analisis Data Shio Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Shio</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    $shio = substr("$hongkong->number",2,2);
                    

                 ?>
                 <?php

                     if ($shio == 1 || $shio == 13 || $shio == 25 || $shio == 37 || $shio == 49 || $shio == 61 || $shio == 73 || $shio == 85 || $shio == 97) $shios = "1. Tikus"; 
                     elseif ($shio == 2 || $shio == 14 || $shio == 26 || $shio == 38 || $shio == 50 || $shio == 62 || $shio == 74 || $shio == 86 || $shio == 98)  $shios = "2. Babi";  
                     elseif ($shio == 3 || $shio == 15 || $shio == 27 || $shio == 39 || $shio == 51 || $shio == 63 || $shio == 75 || $shio == 87 || $shio == 99) $shios = "3. Anjing"; 
                     elseif ($shio == 4 || $shio == 16 || $shio == 28 || $shio == 40 || $shio == 52 || $shio == 64 || $shio == 76 || $shio == 88 || $shio == 00) $shios = "4. Ayam"; 
                     elseif ($shio == 5 || $shio == 17 || $shio == 29 || $shio == 41 || $shio == 53 || $shio == 65 || $shio == 77 || $shio == 89) $shios = "5. Monyet";  
                     elseif ($shio == 6 || $shio == 18 || $shio == 30 || $shio == 42 || $shio == 54 || $shio == 66 || $shio == 78 || $shio == 90) $shios = "6. Kambing"; 
                     elseif ($shio == 7 || $shio == 19 || $shio == 31 || $shio == 43 || $shio == 55 || $shio == 67 || $shio == 79 || $shio == 91) $shios = "7. Kuda"; 
                     elseif ($shio == 8 || $shio == 20 || $shio == 32 || $shio == 44 || $shio == 56 || $shio == 68 || $shio == 80 || $shio == 92) $shios = "8. Ular";  
                     elseif ($shio == 9 || $shio == 21 || $shio == 33 || $shio == 45 || $shio == 57 || $shio == 69 || $shio == 81 || $shio == 93) $shios = "9. Naga"; 
                     elseif ($shio == 10 || $shio == 22 || $shio == 34 || $shio == 46 || $shio == 58 || $shio == 70 || $shio == 82 || $shio == 94) $shios = "10. Kelinci";
                     elseif ($shio == 11 || $shio == 23 || $shio == 35 || $shio == 47 || $shio == 59 || $shio == 71 || $shio == 83 || $shio == 95) $shios = "11. Harimau"; 
                     elseif ($shio == 12 || $shio == 24 || $shio == 36 || $shio == 48 || $shio == 60 || $shio == 72 || $shio == 84 || $shio == 96) $shios = "12. Kerbau"; else  $shios = "-"; 
                 ?>
                        <tr>
                            
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $shios; ?></td>
                            
                            
                        </tr>
                @endforeach        
                                    </tbody>
            </table>
            </div>
        </div><!-- end-shio -->

        <div class="tab-pane" id="silanghomodepan">
          <h5 style="font-weight:bold;">Analisis Data Silang Homo Depan Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Silang</th>
                        <th>Homo</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    $satush = substr("$hongkong->number",0,1) % 2;
                    $sh = 0;
                        if ($satush == $sh) {
                            $satush1 = "genap";
                        } else {
                            $satush1 = "ganjil";
                        }
                    $duash = substr("$hongkong->number",1,1) % 2;
                    $hs = 0;
                        if ($duash == $hs) {
                            $duash1 = "genap";
                        } else {
                            $duash1 = "ganjil";
                        }
                    
                 ?>
                 <?php
                     if ($satush1 == $duash1) { $shsilang = ""; } else { $shsilang = "&#x2714;"; }

                     if ($satush1 == $duash1) { $shhomo = "&#x2714;"; }  else { $shhomo = ""; }

                     
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $shsilang; ?></td>
                            <td><?php  echo $shhomo; ?></td>
                        </tr>
                @endforeach        
                                    </tbody>
            </table>
            </div>
        </div><!-- end-silanghomodepan -->

        <div class="tab-pane" id="silanghomotengah">
          <h5 style="font-weight:bold;">Analisis Data Silang Homo Tengah Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Silang</th>
                        <th>Homo</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    $duash = substr("$hongkong->number",1,1) % 2;
                    $sh = 0;
                        if ($duash == $sh) {
                            $duash1 = "genap";
                        } else {
                            $duash1 = "ganjil";
                        }
                    $tigash = substr("$hongkong->number",2,1) % 2;
                    $hs = 0;
                        if ($tigash == $hs) {
                            $tigash1 = "genap";
                        } else {
                            $tigash1 = "ganjil";
                        }
                    
                 ?>
                 <?php
                     if ($duash1 == $tigash1) { $shsilang = ""; } else { $shsilang = "&#x2714;"; }

                     if ($duash1 == $tigash1) { $shhomo = "&#x2714;"; }  else { $shhomo = ""; }

                     
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $shsilang; ?></td>
                            <td><?php  echo $shhomo; ?></td>
                        </tr>
                @endforeach        
                                    </tbody>
            </table>
            </div>
        </div><!-- end-silanghomotengah -->

        <div class="tab-pane" id="silanghomobelakang">
          <h5 style="font-weight:bold;">Analisis Data Silang Homo Belakang Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Silang</th>
                        <th>Homo</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php

                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    $tigash = substr("$hongkong->number",2,1) % 2;
                    $sh = 0;
                        if ($tigash == $sh) {
                            $tigash1 = "genap";
                        } else {
                            $tigash1 = "ganjil";
                        }
                    $empatsh = substr("$hongkong->number",3,1) % 2;
                    $hs = 0;
                        if ($empatsh == $hs) {
                            $empatsh1 = "genap";
                        } else {
                            $empatsh1 = "ganjil";
                        }
                    
                 ?>
                 <?php
                     if ($tigash1 == $empatsh1) { $shsilang = ""; } else { $shsilang = "&#x2714;"; }

                     if ($tigash1 == $empatsh1) { $shhomo = "&#x2714;"; }  else { $shhomo = ""; }

                     
                 ?>
                        <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $shsilang; ?></td>
                            <td><?php  echo $shhomo; ?></td>
                        </tr>
                @endforeach        
                                    </tbody>
            </table>
            </div>
        </div><!-- end-silanghomobelakang -->

        <div class="tab-pane" id="tengahtepi">
          <h5 style="font-weight:bold;">Analisis Data Tengah Tepi Hongkong</h5>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th>Tengah</th>
                        <th>Tepi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hongkongs as $hongkong)
                 <?php
                    $satu = substr("$hongkong->number",0,1);
                    $dua = substr("$hongkong->number",1,1);
                    $tiga = substr("$hongkong->number",2,1);
                    $empat = substr("$hongkong->number",3,1);
                    $tt = substr("$hongkong->number",2,2);
                        

                ?>    
                <?php
                     if ($tt >= 25 && $tt <= 74) $tengah = "&#x2714;"; else $tengah = "";

                     if ($tt >= 25 && $tt <= 74) { $tepi = ""; }  else { $tepi = "&#x2714;"; }

                     
                 ?>
                                            <tr>
                            <td>{{ $hongkong->hari }}</td>
                            <td>{{ Carbon\Carbon::parse($hongkong->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $hongkong->periode }}-HK</td>
                            <td>{{ $hongkong->number }}</td>
                            <td><?php  echo $tengah; ?></td>
                            <td><?php  echo $tepi; ?></td>
                            
                  @endforeach
                                    </tbody>
            </table>
            </div>
        </div><!-- end-tengahtepi -->

      </div><!--end tab-content -->
      </div><!--end col-xs-9 -->            
      </div>
                </div>
              </div>
           


@endsection
