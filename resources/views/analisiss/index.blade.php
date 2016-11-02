@extends('layouts.index')

@section('content')

<div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading p15 black font">
                  <div class="panel-title">
                    <h3>BUKU MIMPI</h3>
                  </div>  
                    
                </div>
                <div class="panel-body">
                  <form method="POST" action="/analisis/{{ $singapuras->id }}">
                  {{ csrf_field() }}
                  {{ method_field('PATCH') }}
                  <font color="#000000"><b>Periode&nbsp;&nbsp;:&nbsp;{{ $singapuras->periode }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Singapore</b></font><br>
                    <table width="99%" cellspacing="0" cellpadding="0" bordercolor="#FFFFFF" border="1" align="center">
                    <tbody><tr bgcolor="#077800" align="center">
                        <td rowspan="2" width="40%"><font color="ffffff"><b>GAMES</b></font></td>
                        <td colspan="4" width="60%"><font size="2" color="#ffffff"><b>ABCD, A=As, B=Kop, C=Kepala, D=Ekor</b></font></td>
                    </tr>
                    <tr bgcolor="#077800" align="center">
                        <td width="15%"><font color="ffffff"><b>As</b></font></td>
                        <td width="15%"><font color="ffffff"><b>Kop</b></font></td>
                        <td width="15%"><font color="ffffff"><b>Kepala</b></font></td>
                        <td width="15%"><font color="ffffff"><b>Ekor</b></font></td>
                    </tr>
                        
                    <?php

                    $satu = substr("$singapura->number",0,1);
                    $dua = substr("$singapura->number",1,1);
                    $tiga = substr("$singapura->number",2,1);
                    $empat = substr("$singapura->number",3,1);
                    ?>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>4D</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satu; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $dua; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $tiga; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $empat; ?></b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>3D</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>-</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>8</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>1</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>3</b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>2D</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>-</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>-</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>1</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>3</b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Colok&nbsp;&nbsp;Bebas</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>3</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>8</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>1</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>3</b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Kombinasi</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Ganjil</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Genap</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Ganjil</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Ganjil</b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="15%">&nbsp;</td>
                        <td width="15%"><font color="#FFFF00"><b>Kecil</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Besar</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Kecil</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Kecil</b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Colok&nbsp;&nbsp;Jitu</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>3</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>8</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>1</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>3</b></font></td>
                    </tr>

                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>50-50</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Ganjil</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Genap</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Ganjil</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Ganjil</b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%">&nbsp;</td>
                        <td width="15%"><font color="#FFFF00"><b>Kecil</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Besar</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Kecil</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>Kecil</b></font></td>
                    </tr>

                                            <tr bgcolor="#077800" align="center">
                                                <td colspan="5" width="100%">&nbsp;</td>
                                            </tr>

                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Colok&nbsp;&nbsp;Bebas&nbsp;&nbsp;2D</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>38&nbsp;=&nbsp;83</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>31&nbsp;=&nbsp;13</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>33&nbsp;=&nbsp;33</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>81&nbsp;=&nbsp;18</b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%">&nbsp;</td>
                        <td width="15%"><font color="#FFFF00"><b>83&nbsp;=&nbsp;38</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>13&nbsp;=&nbsp;31</b></font></td>
                        <td width="15%">&nbsp;</td>
                        <td width="15%">&nbsp;</td>
                    </tr>



                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Shio</b></font></td>
                            <td colspan="4" width="60%"><font color="#FFFF00"><b>1_Monyet&nbsp;</b></font></td>
                    </tr>


                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Silang&nbsp;&nbsp;Homo</b></font></td>
                        <td colspan="4" width="60%"><font color="#FFFF00"><b>Homo</b></font></td>
                    </tr>

                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Tengah&nbsp;&nbsp;Tepi</b></font></td>
                        <td colspan="4" width="60%"><font color="#FFFF00"><b>Tepi</b></font></td>
                    </tr>

                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Kembang&nbsp;&nbsp;Kempis&nbsp;&nbsp;Kembar</b></font></td>
                        <td colspan="4" width="60%"><font color="#FFFF00"><b>Kembang</b></font></td>
                    </tr>


                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Dasar</b></font></td>
                        <td colspan="4" width="60%"><font color="#FFFF00"><b>Genap&nbsp;&nbsp;-&nbsp;&nbsp;Kecil</b></font></td>
                    </tr>
                    </tbody></table>
                  </form>
                </div>
                
                
            </div>
        </div>
  </div>
    
    


        
      </div>
    
                  

                </div>   <!-- end body -->   
          </div>
        </div>

@endsection
