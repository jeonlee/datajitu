@extends('layouts.index')

@section('content')

<div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading p15 black font">
                  <div class="panel-title">
                    <h3>ANALISIS TAIWAN</h3>
                  </div>  
                    
                </div>
                <div class="panel-body">
                  <form method="POST" action="/analisis/{{ $taiwans->id }}">
                  {{ csrf_field() }}
                  {{ method_field('PATCH') }}
                  <font color="#000000"><b>Periode&nbsp;&nbsp;:&nbsp;{{ $taiwans->periode }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Taiwan</b></font><br>
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
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $dua; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $tiga; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $empat; ?></b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>2D</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>-</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b>-</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $tiga; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $empat; ?></b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Colok&nbsp;&nbsp;Bebas</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satu; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $dua; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $tiga; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $empat; ?></b></font></td>
                    </tr>
                    <?php

                    
                    $asgg = $satu % 2;
                    $kopgg = $dua % 2;
                    $kepalagg = $tiga % 2;
                    $ekorgg = $empat % 2;
                    $dg = 0;
                    $shio = substr("$taiwan->number",2,2);
                 ?>
                 <?php
                     if ($asgg == $dg) { $asgggenap = "genap"; } else { $asgggenap = "ganjil"; }
                     if ($kopgg == $dg) { $asgggenap1 = "genap"; } else { $asgggenap1 = "ganjil"; }
                     if ($kepalagg == $dg) { $asgggenap2 = "genap"; } else { $asgggenap2 = "ganjil"; }
                     if ($ekorgg == $dg) { $asgggenap3 = "genap"; } else { $asgggenap3 = "ganjil"; }
                     if ($satu >= 5) { $satux1 = "besar"; } else { $satux1 = "kecil"; }
                     if ($dua >= 5) { $satux2 = "besar"; } else { $satux2 = "kecil"; }
                     if ($tiga >= 5) { $satux3 = "besar"; } else { $satux3 = "kecil"; }
                     if ($empat >= 5) { $satux4 = "besar"; } else { $satux4 = "kecil"; }


                     
                     
                     


                 ?>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Kombinasi</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $asgggenap; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $asgggenap1; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $asgggenap2; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $asgggenap3; ?></b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="15%">&nbsp;</td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satux1; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satux2; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satux3; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satux4; ?></b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Colok&nbsp;&nbsp;Jitu</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satu; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $dua; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $tiga; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $empat; ?></b></font></td>
                    </tr>

                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>50-50</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $asgggenap; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $asgggenap1; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $asgggenap2; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $asgggenap3; ?></b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%">&nbsp;</td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satux1; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satux2; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satux3; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satux4; ?></b></font></td>
                    </tr>

                                            <tr bgcolor="#077800" align="center">
                                                <td colspan="5" width="100%">&nbsp;</td>
                                            </tr>

                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Colok&nbsp;&nbsp;Bebas&nbsp;&nbsp;2D</b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satu; ?><?php  echo $dua; ?>&nbsp;=&nbsp;<?php  echo $dua; ?><?php  echo $satu; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satu; ?><?php  echo $tiga; ?>&nbsp;=&nbsp;<?php  echo $tiga; ?><?php  echo $satu; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $satu; ?><?php  echo $empat; ?>&nbsp;=&nbsp;<?php  echo $empat; ?><?php  echo $satu; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $dua; ?><?php  echo $tiga; ?>&nbsp;=&nbsp;<?php  echo $tiga; ?><?php  echo $dua; ?></b></font></td>
                    </tr>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%">&nbsp;</td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $dua; ?><?php  echo $empat; ?>&nbsp;=&nbsp;<?php  echo $empat; ?><?php  echo $dua; ?></b></font></td>
                        <td width="15%"><font color="#FFFF00"><b><?php  echo $tiga; ?><?php  echo $empat; ?>&nbsp;=&nbsp;<?php  echo $empat; ?><?php  echo $tiga; ?></b></font></td>
                        <td width="15%">&nbsp;</td>
                        <td width="15%">&nbsp;</td>
                    </tr>

                    <?php
                     if ($shio == 1 || $shio == 13 || $shio == 25 || $shio == 37 || $shio == 49 || $shio == 61 || $shio == 73 || $shio == 85 || $shio == 97) $shios = "1. Ayam"; 
                     elseif ($shio == 2 || $shio == 14 || $shio == 26 || $shio == 38 || $shio == 50 || $shio == 62 || $shio == 74 || $shio == 86 || $shio == 98)  $shios = "2. Monyet";  
                     elseif ($shio == 3 || $shio == 15 || $shio == 27 || $shio == 39 || $shio == 51 || $shio == 63 || $shio == 75 || $shio == 87 || $shio == 99) $shios = "3. Kambing"; 
                     elseif ($shio == 4 || $shio == 16 || $shio == 28 || $shio == 40 || $shio == 52 || $shio == 64 || $shio == 76 || $shio == 88 || $shio == 00) $shios = "4. Kuda"; 
                     elseif ($shio == 5 || $shio == 17 || $shio == 29 || $shio == 41 || $shio == 53 || $shio == 65 || $shio == 77 || $shio == 89) $shios = "5. Ular";  
                     elseif ($shio == 6 || $shio == 18 || $shio == 30 || $shio == 42 || $shio == 54 || $shio == 66 || $shio == 78 || $shio == 90) $shios = "6. Naga"; 
                     elseif ($shio == 7 || $shio == 19 || $shio == 31 || $shio == 43 || $shio == 55 || $shio == 67 || $shio == 79 || $shio == 91) $shios = "7. Kelinci"; 
                     elseif ($shio == 8 || $shio == 20 || $shio == 32 || $shio == 44 || $shio == 56 || $shio == 68 || $shio == 80 || $shio == 92) $shios = "8. Harimau";  
                     elseif ($shio == 9 || $shio == 21 || $shio == 33 || $shio == 45 || $shio == 57 || $shio == 69 || $shio == 81 || $shio == 93) $shios = "9. Kerbau"; 
                     elseif ($shio == 10 || $shio == 22 || $shio == 34 || $shio == 46 || $shio == 58 || $shio == 70 || $shio == 82 || $shio == 94) $shios = "10. Tikus";
                     elseif ($shio == 11 || $shio == 23 || $shio == 35 || $shio == 47 || $shio == 59 || $shio == 71 || $shio == 83 || $shio == 95) $shios = "11. Babi"; 
                     elseif ($shio == 12 || $shio == 24 || $shio == 36 || $shio == 48 || $shio == 60 || $shio == 72 || $shio == 84 || $shio == 96) $shios = "12. Anjing"; else  $shios = "-"; 
                     ?>

                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Shio</b></font></td>
                            <td colspan="4" width="60%"><font color="#FFFF00"><b><?php  echo $shios; ?>&nbsp;</b></font></td>
                    </tr>
                     <?php
                        if ($tigash == $sh) {
                            $tigash1 = "genap";
                        } else {
                            $tigash1 = "ganjil";
                        }
                        if ($empatsh == $hs) {
                            $empatsh1 = "genap";
                        } else {
                            $empatsh1 = "ganjil";
                        }
                    ?>
                    <?php
                     if ($tigash1 == $empatsh1) { $shsilang = "homo"; } else { $shsilang = "silang"; }
                     
                     
                        ?>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Silang&nbsp;&nbsp;Homo</b></font></td>
                        <td colspan="4" width="60%"><font color="#FFFF00"><b><?php  echo $shsilang; ?></b></font></td>
</tr>
                    <?php
                        if ($tt >= 25 && $tt <= 74) $tengah = "Tengah"; else $tengah = "Tepi";
                        
                    ?>
                    
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Tengah&nbsp;&nbsp;Tepi</b></font></td>
                        <td colspan="4" width="60%"><font color="#FFFF00"><b><?php  echo $tengah; ?></b></font></td>
                    </tr>
                     <?php
                         if ($tiga == $empat) { $kembarkk = "Kembar"; } else if ($tiga < $empat) { $kembarkk = "Kembang"; } else { $kembarkk = "Kempis"; }

                    ?>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Kembang&nbsp;&nbsp;Kempis&nbsp;&nbsp;Kembar</b></font></td>
                        <td colspan="4" width="60%"><font color="#FFFF00"><b><?php  echo $kembarkk; ?></b></font></td>
                    </tr>

                    <?php
                         if ($dasarbk5 >= 5) { $dasarbkbesar = "Besar"; } else { $dasarbkbesar = "Kecil"; }
                         if ($dasargg1 == $dg) { $dasargggenap = "Genap"; } else { $dasargggenap = "Ganjil"; }
                    ?>
                    <tr bgcolor="#22b228" align="center">
                        <td width="40%"><font color="#FFFFFF"><b>Dasar</b></font></td>
                        <td colspan="4" width="60%"><font color="#FFFF00"><b><?php  echo $dasargggenap; ?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php  echo $dasarbkbesar; ?></b></font></td>
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
