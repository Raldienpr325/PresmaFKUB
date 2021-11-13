@extends('user.main')
@section('uvote-presma')

@foreach ($datas as $data)  
<div align ="center" >
  <div class="box-body">
      <div class="col-md-7">
        <div class="card card-widget widget-user" style="padding: 5px">
          <div class="widget-user-header text-white" style="background: url('img/photo1.png') center center;">
            <h3 class="widget-user-username text-right">{{ $data->nama }}</h3>
            <h5 class="widget-user-desc text-right">Kandidat PRESMA</h5>
          </div>
            <div class="widget-user-image">
                <img src="{{ asset('storage/'. $data->foto) }}" style="max-height: 120px" alt="User Avatar" class="img-circle elevation-2">
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 style="margin-top: 20px">Prodi : {{ $data->prodi }}</h5>
                  </div>
                </div>
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <a href="{{ url('user.done-vote',['usersid'=>$data->id,'name'=>Auth::user()->name]) }}">
                      <button class="btn btn-danger " style="margin: 20px">Vote</button>  </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 style="margin-top: 20px">Angkatan : {{ $data->angkatan }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
</div>

@endforeach
@include('sweetalert::alert')
@endsection

