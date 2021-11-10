@extends('admin.main')
@section('vote-dpm')
    <div class="card-header">
        edit data dpm
    </div>
    <div class="content">
        <div class="card-body">
            <form action="{{ url('update-vote-dpm', $dpm->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="foto" class="form-label @error('fotodpm') is-invalid
                    @enderror">Photo</label>
                    <input class="form-control" type="file" id="fotodpm" name="fotodpm" value="{{ $dpm->fotodpm }}">
                  </div>
                <div class="form-group">
                    <input type="text" id="namadpm" name="namadpm"  class="form-control @error('namadpm') is-invalid 
                    @enderror" placeholder="Nama dpm" required autofocus  value="{{ $dpm->namadpm }}">
                </div>
                <div class="form-group">
                    <input type="text" id="angkatandpm" name="angkatandpm" class="form-control @error('angkatandpm') is-invalid     
                  @enderror" placeholder="angkatan dpm" required autofocus  value="{{ $dpm->angkatandpm }}">
                </div>
                <div class="form-group">
                    <input type="text" id="prodidpm" name="prodidpm" class="form-control @error('prodidpm') is-invalid     
                    @enderror" placeholder="prodi dpm" required autofocus  value="{{ $dpm->prodidpm}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-group-sm">edit data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
