@extends('layouts.index')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading p15 black font">
    <div class="panel-title">
      <h3>Cara Hitung TOTO SGP</h3>
    </div>
  </div>

  <div class="panel-body p15l">
    <p>
      Contoh nomor bola yang dihasilkan singapore toto (www.singaporepools.com.sg): 
      <br>
      <br>
      <div class="text-center" style=""><img style="margin:0 auto;" src="images/tutorial.jpg"></div>
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
        
        *Untuk mendapatkan angka puluhan dan satuan:
        <ol style="margin-left:30px;">
          <li>Bola di urutkan dari yang terkecil sampai yang terbesar.<br>
            05 – 12 – 17 – 25 – 46 – 49</li>
          <li>Bola ke 1 sampai bola ke 6 dijumlahkan 05 + 12 + 17 + 25 + 46 + 49 = 154 di kali 2 = 308.</li>
          <li>Hasil dari 308 dikurangkan bola ke 1 ( 05 ) dan bola ke 6 ( 49 ) = 254.</li>
          <li>Sisa 254 ditambah dengan additional number (23) = 277</li>
          <li>Dari angka 277 kita ambil 2 angka puluhan tersebut yaitu 77.</li>
        </ol>
        <br>
        *Untuk mendapatkan angka ratusan:
        <ol style="margin-left:30px;">
          <li>Untuk mendapat angka ratusan kita mengambil dari bola ke 4 ( 25 ) ditambah bola ke 5 ( 46 ) jumlah = 71</li>
          <li>Kita ambil ekor 1 ini sebagai angka untuk ratusan.</li>
        </ol>
        <br>
        *Untuk mendapatkan angka ribuan.
        <ol style="margin-left:30px;">
          <li>Untuk mendapat angka ribuan kita mengambil dari bola ke 2 ( 12 ) ditambah bola ke 3 ( 17 ) jumlah = 29</li>
          <li>Kita ambil ekor 9 ini sebagai angka untuk ribuan.</li>
        </ol>
        <br>
        
        <!-- <ol style="margin-left:30px;">
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
        </ol>-->
        <br>
        Ribuan : 9
        Ratusan : 1
        Puluhan : 77
        Hasilnya : 9177
        <table class="table table-bordered text-center" style="width:50%;">
          <tr>
            <td>9</td>
            <td>1</td>
            <td>7</td>
            <td>7</td>
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
