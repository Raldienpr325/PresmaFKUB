@extends('admin.main')
@section('vote')
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <a href="{{ url('create-vote') }}" class="btn btn-success">add data</a>
                <a href="{{ url('export-vote') }}" class="btn btn-warning"> Export</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Tahun Angkatan</th>
                    <th>action</th>
                </tr>
                @foreach ($dtvote as $item)
                    <tr>
                        <td>{{ $item->foto }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->prodi }}</td>
                        <td>{{ $item->angkatan }}</td>
                        <td>
                            <a href="{{ url('delete-vote', $item->id) }}"> <button
                                    class="btn btn-danger">delete</button></a>
                            <a href="{{ url('edit-vote', $item->id) }}"> <button
                                    class="btn btn-warning">update</button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="card-footer">{{ $dtvote->links() }}</div>
    </div>
    @include('sweetalert::alert')
@endsection
