@extends('layouts.index')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading p15 black font">
    <div class="panel-title">
      <h3>KONVERSI TOTO SGP !</h3>
    </div>
  </div>

  <div class="panel-body">
    

   <!-- <script type="text/javascript">

document.write(unescape("%3Cscript%20language%3D%22javascript%22%3E%0D%0Afunction%20fCheckNum%28Isi%29%7B%0D%0Aif%28isNaN%28Isi.value%29%3D%3Dtrue%29%7B%20Isi.value%3D%22%22%3BIsi.focus%28%29%3B%7Delse%7BfCalculate%28%29%3B%7D%0D%0A%0D%0A%7D%0D%0Afunction%20fCalculate%28%29%7B%0D%0A%20%20var%20ekor%3D0%3B%0D%0A%20%20var%20ekor1%3D0%0D%0A%20%20var%20kop%3D0%3B%0D%0A%20%20var%20asi%3D0%3B%0D%0A%20%20var%20j%3B%0D%0A%20%20//with%20%28document.all.item%28%22totfrm%22%29.tags%28%22INPUT%22%29%29%7B%0D%0A%20%20with%20%28document.getElementById%28%22totfrm%22%29.getElementsByTagName%28%22INPUT%22%29%29%7B%0D%0A%20%20for%28j%3D0%3Bj%3C7%3Bj++%29%7B%0D%0A%20%20%20%20if%20%28item%28j%29.value%3D%3D%22%22%29%7B%0D%0A%20%20%20%20%20%20%20ekor%3DparseInt%28ekor%29%3B%0D%0A%20%20%20%20%20%20%20%7Delse%7B%0D%0A%20%20%20%20%20%20%20if%20%28j%3D%3D1%7C%7Cj%3D%3D2%7C%7Cj%3D%3D3%7C%7Cj%3D%3D4%29%7B%0D%0A%20%20%20%20%20%20%20%20%20%20ekor1%3DparseInt%28ekor1%29+parseInt%28item%28j%29.value%29%3B%0D%0A%20%20%20%20%20%20%20%20%20%20if%20%28j%3D%3D1%7C%7Cj%3D%3D2%29%7B%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20asi%3DparseInt%28asi%29+parseInt%28item%28j%29.value%29%3B%0D%0A%20%20%20%20%20%20%20%20%20%20%7Delse%7B%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20kop%3DparseInt%28kop%29+parseInt%28item%28j%29.value%29%3B%0D%0A%20%20%20%20%20%20%20%20%20%20%7D%0D%0A%20%20%20%20%20%20%20%7Delse%7Bekor%3DparseInt%28ekor%29+parseInt%28item%28j%29.value%29%3B%7D%0D%0A%20%20%20%20%20%20%20%7D%0D%0A%20%20%7D%0D%0A%20%20ekor%20%3D%20ekor+ekor1*2%3B%0D%0A%20%20ekor%3Dekor.toString%28%29%3B%0D%0A%20%20ekor%3Dekor.substr%28parseInt%28ekor.length%29-2%29%3B%0D%0A%20%20asi%3Dasi.toString%28%29%3B%0D%0A%20%20asi%3Dasi.substr%28parseInt%28asi.length%29-1%29%3B%0D%0A%20%20kop%3Dkop.toString%28%29%3B%0D%0A%20%20kop%3Dkop.substr%28parseInt%28kop.length%29-1%29%3B%0D%0A%20%20item%287%29.value%3Dasi+kop+ekor%3B%0D%0A%20%20%7D%0D%0A%20%20//document.getElementByName%28%22varCrtl%22%29.value%3Ddocument.getElementById%28%22totfrm%22%29.getElementsByTagName%28%22INPUT%22%29.item%287%29.value%3B%0D%0A%7D%0D%0Afunction%20fHapus%28%29%7B%0D%0A%20%20var%20j%3B%0D%0A%20%20with%20%28document.getElementById%28%22totfrm%22%29.getElementsByTagName%28%22INPUT%22%29%29%7B%0D%0A%20%20for%28j%3D0%3Bj%3C8%3Bj++%29%0D%0A%20%20%20%20%20%20item%28j%29.value%3D%22%22%3B%0D%0A%7D%0D%0Adocument.getElementById%28%22totfrm%22%29.getElementsByTagName%28%22INPUT%22%29.item%280%29.focus%28%29%3B%0D%0A%7D%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/script%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0D%0A%20%20%20%20%0D%0A%20%20%20%20%0D%0A%20%20%20%20%3Cform%20id%3D%27totfrm%27%20name%3D%27totfrm%27%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20align%3D%22center%22%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ccenter%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctable%20border%3D%220%22%20cellpadding%3D%220%22%20cellspacing%3D%220%22%20style%3D%22border-collapse%3A%20collapse%22%20bordercolor%3D%22%23111111%22%20width%3D%22236%22%20height%3D%22203%22%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20width%3D%22450%22%20height%3D%2216%22%20colspan%3D%226%22%20bgcolor%3D%22%23FFD06C%22%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cp%20style%3D%22margin-top%3A%200%3B%20margin-bottom%3A%200%22%20align%3D%22center%22%3E%3Cb%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cfont%20face%3D%22Arial%22%20size%3D%222%22%20color%3D%22%23800000%22%3EWinning%20%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20Numbers%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/tr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20width%3D%2240%22%20height%3D%2236%22%20align%3D%22center%22%3E%0D%0A%20%20%20%20%20%20%3CInput%20type%3D%27text%27%20class%3D%27inp1%27%20maxlength%3D%272%27%20onkeyup%3D%27fCheckNum%28this%29%27%20size%3D%221%22%3E%3C/td%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20width%3D%2240%22%20height%3D%2236%22%20align%3D%22center%22%3E%0D%0A%20%20%20%20%20%20%3CInput%20type%3D%27text%27%20class%3D%27inp1%27%20maxlength%3D%272%27%20onkeyup%3D%27fCheckNum%28this%29%27%20size%3D%221%22%3E%3C/td%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20width%3D%2240%22%20height%3D%2236%22%20align%3D%22center%22%3E%0D%0A%20%20%20%20%20%20%3CInput%20type%3D%27text%27%20class%3D%27inp1%27%20maxlength%3D%272%27%20onkeyup%3D%27fCheckNum%28this%29%27%20size%3D%221%22%3E%3C/td%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20width%3D%2240%22%20height%3D%2236%22%20align%3D%22center%22%3E%0D%0A%20%20%20%20%20%20%3CInput%20type%3D%27text%27%20class%3D%27inp1%27%20maxlength%3D%272%27%20onkeyup%3D%27fCheckNum%28this%29%27%20size%3D%221%22%3E%3C/td%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20width%3D%2240%22%20height%3D%2236%22%20align%3D%22center%22%3E%0D%0A%20%20%20%20%20%20%3CInput%20type%3D%27text%27%20class%3D%27inp1%27%20maxlength%3D%272%27%20onkeyup%3D%27fCheckNum%28this%29%27%20size%3D%221%22%3E%3C/td%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20width%3D%2240%22%20height%3D%2236%22%20align%3D%22center%22%3E%0D%0A%3CInput%20type%3D%27text%27%20class%3D%27inp1%27%20maxlength%3D%272%27%20onkeyup%3D%27fCheckNum%28this%29%27%20size%3D%221%22%3E%3C/td%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/tr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20width%3D%22450%22%20height%3D%2213%22%20colspan%3D%226%22%20bgcolor%3D%22%23FFD06C%22%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cp%20align%3D%22center%22%3E%3Cb%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cfont%20face%3D%22Arial%22%20size%3D%222%22%20color%3D%22%23800000%22%3EAdditional%20%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20Number%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/tr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20width%3D%22450%22%20height%3D%2235%22%20colspan%3D%226%22%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cp%20align%3D%22center%22%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3CInput%20class%3D%27inp1%27%20maxlength%3D%272%27%20onkeyup%3D%27fCheckNum%28this%29%27%20size%3D%221%22%20name%3D%221%22%20%3E%3C/td%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/tr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20width%3D%22450%22%20height%3D%2216%22%20colspan%3D%226%22%20bgcolor%3D%22%23FFD06C%22%3E%0D%0A%20%20%3Cp%20align%3D%22center%22%3E%0D%0A%20%20%3Cb%3E%0D%0A%20%20%3Cfont%20face%3D%22Arial%22%20size%3D%222%22%20color%3D%22%23800080%22%3E4%20Digit%20Results%3C/font%3E%3C/b%3E%3C/td%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/tr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20width%3D%22450%22%20height%3D%2246%22%20colspan%3D%226%22%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cp%20align%3D%22center%22%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cspan%20style%3D%22background-color%3A%20%2300FFFF%22%3E%3Cfont%20face%3D%22Times%20New%20Roman%22%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cinput%20type%3D%22text%22%20name%3D%22Tickt%22%20readonly%3D%22true%22%20size%3D%223%22%20style%3D%22border%3A1px%20solid%20%23800000%3B%20font-family%3AArial%3B%20font-weight%3Abold%3B%20font-size%3A14pt%3B%20background-color%3A%23FFE67A%3B%20text-align%3Acenter%3B%20color%3A%23000080%22%3E%3C/font%3E%3C/span%3E%3C/td%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/tr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctd%20width%3D%22450%22%20height%3D%2236%22%20colspan%3D%226%22%3E%0D%0A%3Cp%20style%3D%22margin-top%3A%200%3B%20margin-bottom%3A%200%22%20align%3D%22center%22%3E%0D%0A%3Ctr%27%3E%3Cinput%20type%3D%27button%27%20name%3D%27hapus%27%20id%3D%27hapus0%27%20onClick%3D%27fHapus%28%29%27%20value%3D%27Clear%27%3E%26nbsp%3B%26nbsp%3B%26nbsp%3B%20%0D%0A%3Cfont%20size%3D%221%22%3E%26nbsp%3B%20by%20%3Cfont%20face%3D%22Arial%22%3E%20%3Ca%20href%3D%22http%3A//datajitu.com/%22%3E%0D%0A%3Cfont%20color%3D%22%230000FF%22%3Edatajitu.com%3C/font%3E%3C/a%3E%3C/font%3E%3C/font%3E%3C/td%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/tr%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/table%3E%0D%0A%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/center%3E%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0D%0A%0D%0A%3C/form%3E"));

</script>-->
<script language="JavaScript">
   <!--
   function fCheckNum(Isi){
   if(isNaN(Isi.value)==true){ Isi.value="";Isi.focus();}else{convert();}
   
   }
   
   function hapusx(){
    var fom = document.fom;
    document.getElementById("hsl").style.display = "none";
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
    var fom = document.getElementById("fom");
    var s1 = eval("fom.s1");
    var s2 = eval("fom.s2");
    var s3 = eval("fom.s3");
    var s4 = eval("fom.s4");
    var s5 = eval("fom.s5");
    var s6 = eval("fom.s6");
    var s7 = eval("fom.s7");
    
    console.log(fom);
    console.log(s1.value);
    console.log(hsl);
    if ((!s1.value) || (!s2.value) || (!s3.value) || (!s4.value) || (!s5.value) || (!s6.value) || (!s7.value)){
     alert("Winning Numbers dan Additional Number harus diisi dengan angka \n Tidak boleh dikosongi!! Prediksi Dua Angka");
     s1.focus();
     return;
    }//else if ()
    document.getElementById("hsl").style.display = "block";
    var myarray=[s1.value, s2.value, s3.value, s4.value, s5.value, s6.value]
    myarray.sort(function(a,b){return a - b}); 
    var c = parseInt(myarray[0]) + parseInt(myarray[1]) + parseInt(myarray[2]) + parseInt(myarray[3]) + parseInt(myarray[4]) + parseInt(myarray[5]);
    c = parseInt(c) * 2;
    c = parseInt(c) - parseInt(myarray[0]) - parseInt(myarray[5]);
    c = parseInt(c) + Number(s7.value);
    c = ""+c;
    if (c.length > 2){
     c = c.substr(1,2);
    }
    var d = c.substr(1);
    c = c.substr(0,1);
    var b = parseInt(myarray[3]) + parseInt(myarray[4]);
    b = ""+b;
    if (b.length > 2){
     b = b.substr(2,1);
    }else {
     b = b.substr(1);
    }
    var a = parseInt(myarray[1]) + parseInt(myarray[2]);
    a = ""+a;
    if (a.length >= 2){
     a = a.substr(1);
    }
   
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
   //-->
</script>
<br />
<form name="fom" id="fom">
   <center>
      <div id="muka" name="muka">
         <center>
            <span style="color: #ff2600; font-size: large;">
            <b></b></span>
         </center>
         <hr>
         <br />
         <table align="center" border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse;">
            <tbody>
               <tr>
                  <td align="center" colspan="6" style="background-color: #FFDE00; border: solid #ac0031 .5pt; color: black; font-weight: bold;">Winning Numbers</td>
               </tr>
               <tr style="background: white;">
                  <td align="center"><input class="isi" id="s1" maxlength="2" name="s1" onkeyup="huruf(this,event);" size="2" style="border: 1px solid silver; font-size:1rem;" tabindex="1" type="text" /></td>
                  <td align="center"><input class="isi" id="s2" maxlength="2" name="s2" onkeyup="huruf(this,event);" size="2" style="border: 1px solid silver; font-size:1rem;" tabindex="2" type="text" /></td>
                  <td align="center"><input class="isi" id="s3" maxlength="2" name="s3" onkeyup="huruf(this,event);" size="2" style="border: 1px solid silver; font-size:1rem;" tabindex="3" type="text" /></td>
                  <td align="center"><input class="isi" id="s4" maxlength="2" name="s4" onkeyup="huruf(this,event);" size="2" style="border: 1px solid silver; font-size:1rem;" tabindex="4" type="text" /></td>
                  <td align="center"><input class="isi" id="s5" maxlength="2" name="s5" onkeyup="huruf(this,event);" size="2" style="border: 1px solid silver; font-size:1rem;" tabindex="5" type="text" /></td>
                  <td align="center"><input class="isi" id="s6" maxlength="2" name="s6" onkeyup="huruf(this,event);" size="2" style="border: 1px solid silver; font-size:1rem;" tabindex="6" type="text" /></td>
               </tr>
               <tr>
                  <td align="center" colspan="6" style="background-color: #FFDE00; border: solid #ac0031 .5pt; color: black; font-weight: bold;" width="400px">Additional&nbsp; Number</td>
               </tr>
               <tr style="background: white;">
                  <td align="center" colspan="6"><input class="isi" id="s7" maxlength="2" name="s7" onkeyup="huruf(this,event);" size="2" style="border: 1px solid silver;" tabindex="7" type="text" /></td>
               </tr>
               <tr style="background: white;">
                  <td align="center" colspan="6"><input id="hapus" name="hapus" onclick="hapusx()" tabindex="8" type="button" value="Clear" />&nbsp;&nbsp;&nbsp;&nbsp;<input id="conv" name="conv" onclick="convert()" tabindex="8" type="button" value="Convert" /></td>
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
