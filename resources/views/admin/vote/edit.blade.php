@extends('admin.main')
@section('vote')
    <div class="card-header">
        edit data presma
    </div>
    <div class="content">
        <div class="card-body">
            <form action="{{ url('update-vote', $presma->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="foto" class="form-label @error('foto') is-invalid
                    @enderror">Photo</label>
                    <input class="form-control" type="file" id="foto" name="foto" value="{{ $presma->foto }}">
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
