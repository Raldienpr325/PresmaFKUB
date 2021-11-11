@extends('admin.main')
@section('proses-vote-presma')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <a href="{{ url('export-proses-presma') }}" class="btn btn-warning"> Export</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Users_id</th>
                <th>Presmas_id</th>
            </tr>
            @foreach ($voting as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->usersid }} </td>
                    <td>{{ $item->presmasid }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    {{-- <div class="card-footer">{{ $dtvote->links() }}</div> --}}
</div>


@include('sweetalert::alert')

@endsection



