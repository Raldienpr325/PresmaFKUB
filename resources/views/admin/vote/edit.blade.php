@extends('admin.main')
@section('vote')
    <div class="card-header">
        edit data presma
    </div>
    <div class="content">
        <div class="card-body">
            <form action="{{ url('update-vote', $presma->id) }}" method="POST">
                @csrf
               <div class="form-group">
                    <input type="file" id="foto" name="foto"  class="form-control @error('foto') is-invalid 
                    @enderror" placeholder="foto Presma" required autofocus  value="{{ $presma->foto }}">
                </div>
                <div class="form-group">
                    <input type="text" id="nama" name="nama"  class="form-control @error('nama') is-invalid 
                    @enderror" placeholder="Nama Presma" required autofocus  value="{{ $presma->nama }}">
                </div>
                <div class="form-group">
                    <input type="text" id="angkatan" name="angkatan" class="form-control @error('angkatan') is-invalid     
                    @enderror" placeholder="angkatan Presma" required autofocus  value="{{ $presma->angkatan }}">
                </div>
                <div class="form-group">
                    <input type="text" id="prodi" name="prodi" class="form-control @error('prodi') is-invalid     
                    @enderror" placeholder="prodi Presma" required autofocus  value="{{ $presma->prodi }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-group-sm">input data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
