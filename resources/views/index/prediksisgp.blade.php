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
           
                                                                                                                                                                                                                                         
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
