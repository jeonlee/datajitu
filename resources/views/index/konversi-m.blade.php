@extends('layouts.index')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading p15 black font">
    <div class="panel-title">
      <h3>KONVERSI TOTO SGP !</h3>
    </div>
  </div>

  <div class="panel-body">
    

     <script language="JavaScript">
  function hapusx(){
    var fom = document.fom;
    hsl.style.display = "none";
    var s1x = eval("fom.s1");
    var s2x = eval("fom.s2");
    var s3x = eval("fom.s3");
    var s4x = eval("fom.s4");
    var s5x = eval("fom.s5");
    var s6x = eval("fom.s6");
    var s7x = eval("fom.s7");
    s1x.value = "";
    s2x.value = "";
    s3x.value = "";
    s4x.value = "";
    s5x.value = "";
    s6x.value = "";
    s7x.value = "";
    s1x.focus();
  }
  function convert(){
    var fom = document.fom;
    var s1 = eval("fom.s1");
    var s2 = eval("fom.s2");
    var s3 = eval("fom.s3");
    var s4 = eval("fom.s4");
    var s5 = eval("fom.s5");
    var s6 = eval("fom.s6");
    var s7 = eval("fom.s7");
    if ((!s1.value) || (!s2.value) || (!s3.value) || (!s4.value) || (!s5.value) || (!s6.value) || (!s7.value)){
      alert("Winning Numbers dan Additional Number harus diisi dengan angka \n Tidak boleh dikosongi!! Prediksi Dua Angka");
      s1.focus();
      return;
    }//else if ()
    hsl.style.display = "block";
    var myarray=[s1.value, s2.value, s3.value, s4.value, s5.value, s6.value]
    myarray.sort(function(a,b){return a - b});  
    var d = parseInt(myarray[0]) + parseInt(myarray[1]) + parseInt(myarray[2]) + parseInt(myarray[3]) + parseInt(myarray[4]) + parseInt(myarray[5]);
    var c = parseInt(d) + Number(s7.value);
    var b = parseInt(myarray[3]) + parseInt(myarray[4]) + parseInt(myarray[5]);
    var a = parseInt(myarray[0]) + parseInt(myarray[1]) + parseInt(myarray[2]);
    
    d = ""+d;
    d = d.substr(d.length - 1);
    c = ""+c;
    c = c.substr(c.length - 1);
    b = ""+b;
    b = b.substr(b.length - 1);
    
    a = ""+a;
    a = a.substr(a.length - 1);
    document.getElementById("ab1").innerHTML = a;
    document.getElementById("ab2").innerHTML = b;
    document.getElementById("ab3").innerHTML = c;
    document.getElementById("ab4").innerHTML = d;
  }
  _dom = 0;
_dom=document.all?3:(document.getElementById?1:(document.layers?2:0));
  function huruf(obj,e) {             //=============================================================

 //thispost=parseInt(obj.name.slice(-1));
 //alert(obj.name)
 if (_dom == 3 || (_dom == 1 && navigator.userAgent.indexOf("Opera/")==0)) // for IE
 {
  //alert(event.keyCode)
  if (event.keyCode > 47 & event.keyCode < 58) {
   //tebak.value = String.fromCharCode(event.keyCode);
   //event.returnValue=false;
  }
  else  { 
   event.returnValue=false;
   return false;
  }

  
 }
 else {
  //alert(e.charCode)
  if (e.charCode > 47 && e.charCode < 58) {
   //alert('ttttt')
   //tebak.value = String.fromCharCode(e.charCode);
   //event.returnValue=false;
  } 
  else if (e.charCode == 0){
   event.returnValue=false;
   return false;
  }
  else  { 
   var fom = document.fom;
   var nam = eval("fom."+obj.name);
   e.returnValue=false;
   //alert(nam.value)
   nam.value = "";
   alert("Winning Numbers dan Additional Number harus diisi dengan angka! \n Jangan memasukkan selain angka!!");
   return true;
   
  }
 }
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
