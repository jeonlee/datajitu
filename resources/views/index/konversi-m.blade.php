@extends('layouts.index')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading p15 black font">
    <div class="panel-title">
      <h3>KONVERSI TOTO SGP !</h3>
    </div>
  </div>

  <div class="panel-body">
    

    <script type="text/javascript">
   <!--
   document.write(unescape("<script language="javascript">
   function fCheckNum(Isi){
   if(isNaN(Isi.value)==true){ Isi.value="";Isi.focus();}else{fCalculate();}
   
   }
   function fCalculate(){
     var ekor=0;
     var ekor1=0
     var kop=0;
     var asi=0;
     var j;
     //with (document.all.item("totfrm").tags("INPUT")){
     with (document.getElementById("totfrm").getElementsByTagName("INPUT")){
     for(j=0;j<7;j  ){
       if (item(j).value==""){
          ekor=parseInt(ekor);
          }else{
          if (j==1||j==2||j==3||j==4){
             ekor1=parseInt(ekor1) parseInt(item(j).value);
             if (j==1||j==2){
                asi=parseInt(asi) parseInt(item(j).value);
             }else{
                kop=parseInt(kop) parseInt(item(j).value);
             }
          }else{ekor=parseInt(ekor) parseInt(item(j).value);}
          }
     }
     ekor = ekor ekor1*2;
     ekor=ekor.toString();
     ekor=ekor.substr(parseInt(ekor.length)-2);
     asi=asi.toString();
     asi=asi.substr(parseInt(asi.length)-1);
     kop=kop.toString();
     kop=kop.substr(parseInt(kop.length)-1);
     item(7).value=asi kop ekor;
     }
     //document.getElementByName("varCrtl").value=document.getElementById("totfrm").getElementsByTagName("INPUT").item(7).value;
   }
   function fHapus(){
     var j;
     with (document.getElementById("totfrm").getElementsByTagName("INPUT")){
     for(j=0;j<8;j  )
         item(j).value="";
   }
   document.getElementById("totfrm").getElementsByTagName("INPUT").item(0).focus();
   }
                                
</script>
<form name="fom">
   <center>
      <div id="muka" name="muka">
         <center>
            <span style="color: #ff2600; font-size: large;">
            <b>Konversi Toto Singapore ke 4D </b></span>
         </center>
         <hr>
         <br />
         <table align="center" border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse; height: 10%px; width: 400pxpx;">
            <tbody>
               <tr>
                  <td align="center" colspan="6" style="background-color: #ac0031; border: solid #ac0031 .5pt; color: white; font-weight: bold;">Winning Numbers</td>
               </tr>
               <tr style="background: white;">
                  <td align="center"><input class="isi" id="s1" maxlength="2" name="s1" onkeypress="huruf(this,event);" size="2" style="border: 1px solid silver;" tabindex="1" type="text" /></td>
                  <td align="center"><input class="isi" id="s2" maxlength="2" name="s2" onkeypress="huruf(this,event);" size="2" style="border: 1px solid silver;" tabindex="2" type="text" /></td>
                  <td align="center"><input class="isi" id="s3" maxlength="2" name="s3" onkeypress="huruf(this,event);" size="2" style="border: 1px solid silver;" tabindex="3" type="text" /></td>
                  <td align="center"><input class="isi" id="s4" maxlength="2" name="s4" onkeypress="huruf(this,event);" size="2" style="border: 1px solid silver;" tabindex="4" type="text" /></td>
                  <td align="center"><input class="isi" id="s5" maxlength="2" name="s5" onkeypress="huruf(this,event);" size="2" style="border: 1px solid silver;" tabindex="5" type="text" /></td>
                  <td align="center"><input class="isi" id="s6" maxlength="2" name="s6" onkeypress="huruf(this,event);" size="2" style="border: 1px solid silver;" tabindex="6" type="text" /></td>
               </tr>
               <tr>
                  <td align="center" colspan="6" style="background-color: #ac0031; border: solid #ac0031 .5pt; color: white; font-weight: bold;" width="400px">Additional&nbsp; Number</td>
               </tr>
               <tr style="background: white;">
                  <td align="center" colspan="6"><input class="isi" id="s7" maxlength="2" name="s7" onkeypress="huruf(this,event);" size="2" style="border: 1px solid silver;" tabindex="7" type="text" /></td>
               </tr>
               <tr style="background: white;">
                  <td align="center" colspan="6"><input id="hapus" name="hapus" onclick="hapusx()" tabindex="8" type="button" value="Hapus" />&nbsp;&nbsp;&nbsp;&nbsp;<input id="conv" name="conv" onclick="convert()" tabindex="8" type="button" value="Convert!" /></td>
               </tr>
            </tbody>
         </table>
      </div>
      <div id="hsl" name="hsl" style="display: none;">
         <table align="center" border="0" bordercolor="silver" cellpadding="0" cellspacing="9">
            <input class="td2" id="wn1" name="wn1" type="hidden" /><input class="td2" id="wn2" name="wn2" type="hidden" /><input class="td2" id="wn3" name="wn3" type="hidden" /><input class="td2" id="wn4" name="wn4" type="hidden" /><input class="td2" id="wn5" name="wn5" type="hidden" /><input class="td2" id="wn6" name="wn6" type="hidden" />
            <input colspan="2" id="wn7" name="wn7" style="border-color: silver; border: solid silver .5pt;" type="hidden" />
            <tbody>
               <tr>
                  <td colspan="6">
                     <table align="center" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                           <tr height="15">
                              <td colspan="4" style="font-size: 13pt;"><b>Hasil Konversi</b></td>
                           </tr>
                           <tr>
                              <td colspan="4" height="9"></td>
                           </tr>
                           <tr style="font-weight: bolder;">
                              <td class="td1" id="ab1" name="ab1">1</td>
                              <td class="td1" id="ab2" name="ab2">2</td>
                              <td class="td1" id="ab3" name="ab3">3</td>
                              <td class="td1" id="ab4" name="ab4">4</td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </center>
</form>
"));
//-->
</script>
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
