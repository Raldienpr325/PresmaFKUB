@extends('admin.main')
@section('vote')
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <a href="{{ url('create-vote') }}" class="btn btn-success">add data <i class="fas fa-plus"></i></a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>nama</th>
                    <th>nim</th>
                </tr>
                @foreach ($dtvote as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nim }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
