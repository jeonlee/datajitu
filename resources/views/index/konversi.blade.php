@extends('layouts.index')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading p15 black font">
    <div class="panel-title">
      <h3>KONVERSI TOTO SGP</h3>
    </div>
  </div>

  <div class="panel-body">
    <form name="fom">
      <table class="table table-bordered text-center" style="width:55%; margin:auto;">
        <thead>
          <tr class="active">
            <th colspan="6" class="text-center pink">Winning Numbers</th>
            <th class="text-center pink">Additional Number</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" onkeypress="huruf(this,event);" class="form-control input-sm isi" maxlength="2" tabindex="1" id="s1" name="s1"></td>
            <td><input type="text" onkeypress="huruf(this,event);" class="form-control input-sm isi" maxlength="2" tabindex="1" id="s2" name="s2"></td>
            <td><input type="text" onkeypress="huruf(this,event);" class="form-control input-sm isi" maxlength="2" tabindex="1" id="s3" name="s3"></td>
            <td><input type="text" onkeypress="huruf(this,event);" class="form-control input-sm isi" maxlength="2" tabindex="1" id="s4" name="s4"></td>
            <td><input type="text" onkeypress="huruf(this,event);" class="form-control input-sm isi" maxlength="2" tabindex="1" id="s5" name="s5"></td>
            <td><input type="text" onkeypress="huruf(this,event);" class="form-control input-sm isi" maxlength="2" tabindex="1" id="s6" name="s6"></td>
            <td><input type="text" onkeypress="huruf(this,event);" class="form-control input-sm isi" maxlength="2" tabindex="1" id="s7" name="s7"></td>
          </tr>
          <tr>
            <td colspan="3"><input type="button" class="btn btn-danger btn-xs" value="Hapus" onclick="hapusx()" tabindex="8" id="hapus" name="hapus"> <input type="button" class="btn btn-primary btn-xs" onclick="convert()" value="Convert!" tabindex="8" id="conv" name="conv">
            <td colspan="4">
            <div style="display:none" name="hsl" id="hsl">
              <table cellspacing="9" cellpadding="0" bordercolor="silver" border="0" align="center">
                <input type="hidden" name="wn1" id="wn1" class="td2"><input type="hidden" name="wn2" id="wn2" class="td2"><input type="hidden" name="wn3" id="wn3" class="td2"><input type="hidden" name="wn4" id="wn4" class="td2"><input type="hidden" name="wn5" id="wn5" class="td2"><input type="hidden" name="wn6" id="wn6" class="td2">
                <input type="hidden" name="wn7" id="wn7" style="border:solid silver .5pt;border-color:silver;" colspan="2">
                <tbody>
                  <tr>
                    <td colspan="6">
                      <table cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody>
                          <tr height="15"><td style="font-size:13pt" colspan="4"><b>Hasil Konversi</b></td></tr>
                          <tr><td height="9" colspan="4">&nbsp;</td></tr>
                          <tr style="font-size=18px;font-weight:bolder;"><td name="ab1" id="ab1" class="td1">1</td><td name="ab2" id="ab2" class="td1">2</td><td name="ab3" id="ab3" class="td1">3</td><td name="ab4" id="ab4" class="td1">4</td></tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
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
