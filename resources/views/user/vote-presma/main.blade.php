@extends('user.main')
@section('uvote-presma')


<h1 style="text-align: center;padding-top:30px;font-family:Monaco,Helvetica, sans-serif"><strong> VOTE PRESMA</strong></h1>
<div class="container" style="padding:20px;">
  <div class="row">
    @foreach ($datas as $data)
    <div class="col-md-4 p-md-4">
      <div class="card" style="box-shadow: 0px 4px 4px 2px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding:10px;" >
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{ asset('storage/'. $data->foto) }}"
            class="card-img-top"
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
  
  :root {
  --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
}

body {
  background: #111 !important;
}

.card {
  background: #222;
  border: 1px solid #dd2476;
  color: rgba(250, 250, 250, 0.8);
  margin-bottom: 2rem;
}

.btn {
  border: 5px solid;
  border-image-slice: 1;
  background: var(--gradient) !important;
  -webkit-background-clip: text !important;
  -webkit-text-fill-color: transparent !important;
  border-image-source:  var(--gradient) !important; 
  text-decoration: none;
  transition: all .4s ease;
}

.btn:hover, .btn:focus {
      background: var(--gradient) !important;
  -webkit-background-clip: none !important;
  -webkit-text-fill-color: #fff !important;
  border: 5px solid #fff !important; 
  box-shadow: #222 1px 0 10px;
  text-decoration: underline;
}

  }
  
</style>


@include('sweetalert::alert')
@endsection

