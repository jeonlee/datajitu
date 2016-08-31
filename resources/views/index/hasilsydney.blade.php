@extends('layouts.index')


@section('content')

<div class="panel panel-primary">
                <div class="panel-heading p15 black font">
                  <div class="panel-title">
                    <h3>HASIL LENGKAP TOGEL SYDNEY</h3>
                  </div>
                </div>

                <div class="panel-body">
                  <table class="middle">
                    <thead>
                      <tr class="kolom orange">
                                                           
                        <th><div class="th_jam">DATE</div></th>
                        <th><div class="th_jam">PERIODE</div></th>
                        <th><div class="th_jam">RESULT</div></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($sydneys as $sydney)
                      <tr>
                        <td><div class="t_no f20">{{ Carbon\Carbon::parse($sydney->tanggal)->format('d-m-Y') }}</div></td>
                        <td><div class="t_hari f20">{{ $sydney->periode }}-SD</div></td>
                        <td><div class="t_tgl oren f20">{{ $sydney->number }}</div></td>                                    
                        
                      </tr>   
                      
                      @endforeach
                                                                                                                                                                                                                                                   
                    </tbody>
                
                
                </table>
                <div class="text-center">
                {!! $sydneys->render(); !!}
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
