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
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Presma"
                        value="{{ $presma->nama }}">
                </div>
                <div class="form-group">
                    <input type="text" id="nim" name="nim" class="form-control" placeholder="Nim Presma">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-group-sm">update data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
