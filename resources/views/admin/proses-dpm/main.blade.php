@extends('admin.main')
@section('proses-vote-dpm')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <a href="{{ url('export-proses-dpm') }}" class="btn btn-warning"> Export</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Users_id</th>
                <th>Nama Pemilih</th>
                <th>NIM Pemilih</th>
                <th>DPM_id</th>
                <th>Nama DPM</th>
            
            </tr>
            @foreach ($voting2 as $item)
                <tr>
                 <td>{{ $loop->iteration }}</td>
                 <td>{{ $item->usersid }}</td>
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



