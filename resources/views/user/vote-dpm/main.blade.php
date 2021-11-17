@extends('user.main')
@section('uvote-dpm')

<div class="container">
  <div class="row">
    @foreach ($datas2 as $data)
    <div class="col-md-4 p-md-4">
      <div class="card " style="box-shadow: 0px 4px 4px 2px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{ asset('storage/'. $data->fotodpm) }}"
            class=" img-fluid" width="400" height="100"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body " style="text-align: center">
          <h5 class="card-title" ><h3>{{ $data->namadpm }} ( {{ $data->nourutdpm }} )</h3> </h5>
          <p class="card-text"> Prodi {{ $data->prodidpm }} |  Angkatan {{ $data->angkatandpm }}</p>
          <button type="button" class="btn btn-danger btn-lg d-grid gap-2 col-6 mx-auto " data-bs-toggle="modal" data-bs-target="#exampleModal">
            Vote
          </button>
        </div>
      </div>
    </div>
    
    @endforeach
  </div>
  {{-- Modal section --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        @foreach ($datas2 as $data)
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Voting DPM</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        @endforeach
        <div class="modal-body">
          <p>Apakah anda Sudah Yakin memilih {{ $data->namadpm }} No urut {{ $data->nourutdpm }} ?</p>
        </div>
        <div class="modal-footer">
          <a href="{{ url('user.done-vote2',[
            'usersid'=>$data->id,
            'name'=>Auth::user()->name]
            ) }}">
            <button class="btn btn-primary">Yakin</button></a>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Section --}}
</div>

<style>
   .img-fluid{
    width: 400px;
    height: 400px;
  }
  @media (max-width:560px){
    .img-fluid{
      width: 220px;
      height: 320px;
    }
    .card{
      width: 50%;
      padding: 5px;
      margin: 5px;      
    }

  }
  </style>

@include('sweetalert::alert')
@endsection

