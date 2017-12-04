@extends('layouts.index')

@section('content')

 <div class="col-xs-12">
    <div class="panel panel-primary">
      <div class="panel-heading p15 black font">
        <div class="panel-title">
          <h3>JADWAL KELUARAN TOGEL</h3>
        </div>
      </div>
      <div class="panel-body">
        <table class="middle">
          <thead>
            <tr class="kolom">
              <th><div>No</div></th>
              <th><div>Togel</div></th>
              <th><div>Hari</div></th>                                    
              <th><div class="th_jam">Tanggal</div></th>
              <th><div class="th_jam">Prediksi</div></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><div class="t_no">1</div></td>
              <td><div class="t_hari">Togel Singapura</div></td>
              <td><div class="t_tgl">{{ $prediksisgp->hari }}</div></td>                                    
              <td><div class="t_city">{{ Carbon\Carbon::parse($prediksisgp->tanggal)->format('d-m-Y') }}</div></td>
              <td><div class="t_city">{{ $prediksisgp->prediksi }}</div></td>
            </tr>   
            <tr>
              <td><div class="t_no">2</div></td>
              <td><div class="t_hari">Togel Sydney</div></td>
              <td><div class="t_tgl">{{ $prediksisyd->hari }}</div></td>                                    
              <td><div class="t_city">{{ Carbon\Carbon::parse($prediksisyd->tanggal)->format('d-m-Y') }}</div></td>
              <td><div class="t_city">{{ $prediksisyd->prediksi }}</div></td>
            </tr>              
            <tr>
              <td><div class="t_no">3</div></td>
              <td><div class="t_hari">Togel Cambodia</div></td>
              <td><div class="t_tgl">{{ $prediksicmb->hari }}</div></td>                                    
              <td><div class="t_city">{{ Carbon\Carbon::parse($prediksicmb->tanggal)->format('d-m-Y') }}</div></td>
              <td><div class="t_city">{{ $prediksicmb->prediksi }}</div></td>
            </tr>               
            <tr>
              <td><div class="t_no">4</div></td>
              <td><div class="t_hari">Togel Taiwan</div></td>
              <td><div class="t_tgl">{{ $prediksitw->hari }}</div></td>                                    
              <td><div class="t_city">{{ Carbon\Carbon::parse($prediksitw->tanggal)->format('d-m-Y') }}</div></td>
              <td><div class="t_city">{{ $prediksitw->prediksi }}</div></td>
            </tr>     
            <tr>
              <td><div class="t_no">5</div></td>
              <td><div class="t_hari">Togel China</div></td>
              <td><div class="t_tgl">{{ $prediksichn->hari }}</div></td>                                    
              <td><div class="t_city">{{ Carbon\Carbon::parse($prediksichn->tanggal)->format('d-m-Y') }}</div></td>
              <td><div class="t_city">{{ $prediksichn->prediksi }}</div></td>
            </tr>   
            <tr>
              <td><div class="t_no">6</div></td>
              <td><div class="t_hari">Togel Hongkong</div></td>
              <td><div class="t_tgl">{{ $prediksihk->hari }}</div></td>                                    
              <td><div class="t_city">{{ Carbon\Carbon::parse($prediksihk->tanggal)->format('d-m-Y') }}</div></td>
              <td><div class="t_city">{{ $prediksihk->prediksi }}</div></td>
            </tr> 
                                                                                                                                                                                                                                         
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
