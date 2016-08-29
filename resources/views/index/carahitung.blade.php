@extends('layouts.index')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading p15 black font">
    <div class="panel-title">
      <h3>HASIL LENGKAP TOGEL TAIWAN</h3>
    </div>
  </div>

  <div class="panel-body p15l">
    <p>
      Contoh nomor bola yang dihasilkan singapore toto (www.singaporepools.com.sg): 
      <br>
      <br>
      <div class="text-center" style="margin-left:150px;"><img src="images/tutorial.jpg"></div>
      <br>
      <p style="text-align:left;">Hasil Keluar Togel Singapura :</p>
      <br>
      <div class="text-center">
      <table class="table table-bordered" style="width:50%;">
        <tr>
          <td>?</td>
          <td>?</td>
          <td>?</td>
          <td>?</td>
        </tr>
        <tr>
          <td>Ribuan</td>
          <td>Ratusan</td>
          <td>Puluhan</td>
          <td>Satuan</td>
        </tr>
      </table>
      </div>
      <br>
        Cara manual perhitungan Hasil Toto Singapura (senin & kamis) menggunakan <b>Rumus Konversi Singapura terbaru</b> :<br>
        <ol style="margin-left:30px;">
          <li>Urutkan bola mulai dari yang terkecil sampai yang terbesar<br>
            05 – 12 – 17 – 25 – 46 – 49</li>
          <li>Cara mendapatkan angka Satuan / Ekor,<br>
            (rumus = bola1 + bola2 + bola3 + bola4 + bola5 + bola6)<br>
            05 + 12 + 17 + 25 + 46 + 49 = 15<span style="color:#F00;">4</span></li>
          <li>Cara mendapatkan angka Puluhan / Kepala, <br>
            (rumus = bola1 + bola2 + bola3 + bola4 + bola5 + bola6 + Additional Number)<br>
            05 + 12 + 17 + 25 + 46 + 49 + 23 = 17<span style="color:#F00;">7</span></li>
          <li>Cara mendapatkan angka Ratusan / KOP, <br>
           (rumus = bola4 + bola5 + bola6)<br>
            25 + 46 + 49 = 12<span style="color:#F00;">0</span></li>
          <li>Cara mendapatkan angka Ribuan / AS,<br>
        (rumus = bola1 + bola2 + bola3)<br>
            05 + 12 + 17 = 3<span style="color:#F00;">4</span></li>
        </ol>
        <br>
        maka hasil perhitungan diatas <br>
        Di ambil angka belakangnya saja<br>
        hasilnya = 
        <table class="table table-bordered text-center" style="width:50%;">
          <tr>
            <td>4</td>
            <td>0</td>
            <td>7</td>
            <td>4</td>
          </tr>
          <tr>
            <td>Ribuan</td>
            <td>Ratusan</td>
            <td>Puluhan</td>
            <td>Satuan</td>
          </tr>
        </table>

        Untuk melihat hasil dari putaran nomor toto singapura ini bisa dilihat di <a href="index.php?hasiltoto">halaman ini.</a>

      </p>
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
