@extends('admin.main')
@section('proses-vote-presma')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <a href="{{ url('export-proses-presma') }}" class="btn btn-warning"> Export</a>
            <form action="{{ route('caripemilihpresma') }}">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Nama / Nim Pemilih.." name="search">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>

            
            @if(session()->has('notfound'))
            <div class="alert alert-danger" role="alert">
                {{ session('notfound') }}
            </div>
            @endif


        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Users_id</th>
                <th>Users_Google_id</th>
                <th>Nama Pemilih</th>
                <th>NIM Pemilih</th>
                <th>Presmas_id</th>
                <th>Nama Presmas</th>
            </tr>
            @foreach ($voting as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->usersid }} </td>
                    <td>{{ $item->google_id }} </td>
                    <td>{{ $item['user-name'] }}</td>
                    <td>{{ $item['user-NIM'] }}</td>
                    <td>{{ $item->presmasid }}</td>
                    <td>{{ $item['presma-name'] }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="card-footer">{{ $voting->links() }}</div>
</div>


@include('sweetalert::alert')

@endsection



