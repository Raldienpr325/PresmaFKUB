@extends('admin.main')
@section('vote')
    <div class="card-header">
        vote presma
    </div>
    <div class="content">
        <div class="card-body">
            <form action="{{ url('simpan-vote') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Presma">
                </div>
                <div class="form-group">
                    <input type="text" id="nim" name="nim" class="form-control" placeholder="Nim Presma">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-group-sm">input data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
