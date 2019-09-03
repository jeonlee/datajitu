@extends('layouts.index')

@section('content')

<div class="panel panel-primary">
                <div class="panel-heading p15 black font">
                  <div class="panel-title">
                    <h3>HASIL LENGKAP TOGEL CAMBODIA</h3>
                  </div>
                </div>

                <div class="panel-body">
                <div class="table-responsive">
                  <table class="middle">
                    <thead>
                      <tr class="kolom red">
                                                           
                        <th><div class="th_jam">DATE</div></th>
                        <th><div class="th_jam">PERIODE</div></th>
                        <th><div class="th_jam">RESULT</div></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($cambodias as $cambodia)
                      <tr>
                        <td><div class="t_no f20">{{ Carbon\Carbon::parse($cambodia->tanggal)->format('d-m-Y') }}</div></td>
                        <td><div class="t_hari f20">{{ $cambodia->periode }}-MC</div></td>
                        <td><div class="t_tgl merah f20"><a class="blue-number" href="/analisiscmb/{{ $cambodia->id }}">{{ $cambodia->number }}</a></div></td>                                    
                        
                      </tr>   
                      
                      @endforeach
                                                                                                                                                                                                                                                   
                    </tbody>
                
                
                </table>
                </div>
                <div class="text-center">
                 <form>
            <select id="pagination">
                        <option value="10" @if($items == 10) selected @endif >10</option>
                        <option value="25" @if($items == 25) selected @endif >25</option>
                        <option value="50" @if($items == 50) selected @endif >50</option>
                        <option value="100" @if($items == 100) selected @endif >100</option>
                    </select>
                </form>

                <script>
                    document.getElementById('pagination').onchange = function() {
                        window.location = "{{ $cambodias->url(1) }}&items=" + this.value;
                    };
                </script>
                {!! $cambodias->render(); !!}
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
