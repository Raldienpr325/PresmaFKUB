@extends('user.main')
@section('uvote-presma')


<div class="container">
  <div class="row">
    @foreach ($datas as $data)
    <div class="col-md-4 p-md-4">
      <div class="card text-white bg-light" >
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img
            src="{{ asset('storage/'. $data->foto) }}"
            class=" img-fluid" width="400" height="100"
          />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title"><h3>{{ $data->nama }} ( {{ $data->nourut }} )</h3> </h5>
          <p class="card-text"> Prodi {{ $data->prodi }} | Angkatan {{ $data->angkatan }}</p>
              <a href="{{ url('user.done-vote',[
                'usersid'=>$data->id,
                'name'=>Auth::user()->name]
                ) }}">
                <button class="btn btn-secondary btn-lg " >Vote</button>  </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>


@include('sweetalert::alert')
@endsection

