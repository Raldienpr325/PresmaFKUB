@extends('user.main')
@section('uvote-dpm')

@foreach ($datas2 as $data)  
<div class="row p-md-4">
<div class="col-md-4">
    <div class="card card-widget widget-user">
        <div class="widget-user-header bg-info">
          <h3 class="widget-user-username">{{ $data->namadpm }}</h3>
        </div>
        <div class="widget-user-image">
            <img src="{{ asset('storage/'. $data->fotodpm) }}" style="max-height: 140px" alt="User Avatar" class="img-circle elevation-2">
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-sm-4 border-right">
              <div class="description-block">
                <h5 class="description-header">Prodi : {{ $data->prodidpm }}</h5>
              </div>
            </div>
            <div class="col-sm-4 border-right">
              <div class="description-block">
                <a href="{{ url('user.done-vote2',['usersid'=>$data->id,'name'=>Auth::user()->name]) }}">
                  <button class="btn btn-danger" style="margin: 20px">Vote</button>  </a>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="description-block">
                <h5 class="description-header">Angkatan : {{ $data->angkatandpm }}</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</div>


@endforeach
@endsection

