@extends('admin.main')
@section('vote')
    <div class="card-header">
        vote presma
    </div>
    <div class="content">
        <div class="card-body">
            <form action="{{ url('simpan-vote') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <input type="file" id="foto" name="foto"  class="form-control @error('foto') is-invalid 
                    @enderror" placeholder="foto" required autofocus value="{{ old('foto') }}">
                </div>
                <div class="form-group">
                    <input type="text" id="na ma" name="nama"  class="form-control @error('nama') is-invalid 
                    @enderror" placeholder="Nama" required autofocus value="{{ old('nama') }}">
                </div>
                <div class="form-group">
                    <input type="text" id="angkatan" name="angkatan" class="form-control @error('angkatan') is-invalid     
                    @enderror" placeholder="Angkatan" required autofocus value="{{ old('angkatan') }}">
                </div>
                <div class="form-group">
                    <input type="text" id="prodi" name="prodi" class="form-control @error('prodi') is-invalid     
                    @enderror" placeholder="Prodi" required autofocus value="{{ old('prodi') }}">
                </div>
                <div class="form-group">
                    <input type="text" id="nourut" name="nourut"  class="form-control @error('nourut') is-invalid 
                    @enderror" placeholder="No urut" required autofocus value="{{ old('nourut') }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-group-sm">input data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
