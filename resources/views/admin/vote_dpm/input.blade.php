@extends('admin.main')
@section('vote-dpm')
    <div class="card-header">
        vote dpm
    </div>
    <div class="content">
        <div class="card-body">
            <form action="{{ url('simpan-vote-dpm') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" id="fotodpm" name="fotodpm"  class="form-control @error('fotodpm') is-invalid 
                    @enderror" placeholder="foto" required autofocus value="{{ old('fotodpm') }}">
                </div>
                <div class="form-group">
                    <input type="text" id="namadpm" name="namadpm"  class="form-control @error('nama-dpm') is-invalid 
                    @enderror" placeholder="Nama" required autofocus value="{{ old('namadpm') }}">
                </div>
                <div class="form-group">
                    <input type="text" id="angkatandpm" name="angkatandpm" class="form-control @error('angkatan-dpm') is-invalid     
                    @enderror" placeholder="Angkatan" required autofocus value="{{ old('angkatandpm') }}">
                </div>
                <div class="form-group">
                    <input type="text" id="prodidpm" name="prodidpm" class="form-control @error('prodi-dpm') is-invalid     
                    @enderror" placeholder="Prodi" required autofocus value="{{ old('prodidpm') }}">
                </div>
                <div class="form-group">
                    <input type="text" id="nourutdpm" name="nourutdpm" class="form-control @error('nourutdpm') is-invalid     
                    @enderror" placeholder="No urut" required autofocus value="{{ old('nourutdpm') }}">
                    
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-group-sm">input data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
