@extends('user.main')
@section('uvote-presma')



<div class="container" style="padding:20px;">
  <div class="row">
    @foreach ($datas as $data)
    <div class="col-md-4 p-md-4">
      <div class="card" style="box-shadow: 0px 4px 4px 2px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{ asset('storage/'. $data->foto) }}"
            class="img-fluid"  
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body" style="text-align: center">
          <h5 class="card-title"><h3>{{ $data->nama }} ( {{ $data->nourut }} )</h3> </h5>
          <p class="card-text"> Prodi {{ $data->prodi }} | Angkatan {{ $data->angkatan }}</p>
              <a href="{{ url('user.done-vote',[
                'usersid'=>$data->id,
                'name'=>Auth::user()->name]
                ) }}">
                <button  class="btn btn-primary btn-lg"  >Vote</button>  </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<style>
  
  .img-fluid{
    width: 400px;
    height: 480px;
  }
  @media (max-width:560px){
    .img-fluid{
      margin-left: 110px;
      margin-top: 20px;
      width: 220px;
      height: 320px;
    }
    .card{
      padding: 5px;
      margin: 5px;      
    }

  }
  
</style>


@include('sweetalert::alert')
@endsection

