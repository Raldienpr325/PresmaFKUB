@extends('admin.main')
@section('proses-vote-dpm')
    <div class="content">

        <div class="card card-info card-outline">
            <div class="card-header">
                <a href="{{ url('export-proses-dpm') }}" class="btn btn-warning"> Export</a>
                <form action="{{ route('caripemilihdm') }}">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Nama / Nim Pemilih.." name="search">
                        <button class="btn btn-danger" type="submit">Search</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Users_id</th>
                    <th>Users_Google_id</th>
                    <th>Nama Pemilih</th>
                    <th>NIM Pemilih</th>
                    <th>DPM_id</th>
                    <th>Nama DPM</th>

                </tr>
                @foreach ($voting2 as $item)
                    <tr>
                        <td>{{ $item->usersid }}</td>
                        <td>{{ $item->google_id }}</td>
                        <td>{{ $item['user-name'] }}</td>
                        <td>{{ $item['user-NIM'] }}</td>
                        <td>{{ $item->dpmsid }}</td>
                        <td>{{ $item['dpm-name'] }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="card-footer">{{ $voting2->links() }}</div>
    </div>


    @include('sweetalert::alert')

@endsection
