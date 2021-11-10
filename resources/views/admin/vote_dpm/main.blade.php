@extends('admin.main')
@section('vote-dpm')
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <a href="{{ url('create-vote-dpm') }}" class="btn btn-success">add data</a>
                {{-- <a href="{{ url('export-vote') }}" class="btn btn-warning"> Export</a> --}}
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Foto DPM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Tahun Angkatan</th>
                    <th>action</th>
                </tr>
                @foreach ($dpmvote as $item)
                    <tr>
                        <td>   
                            <img src="{{ asset('storage/'. $item->fotodpm) }}" style="max-height: 140px">
                        </td>
                        <td>{{ $item->namadpm }}</td>
                        <td>{{ $item->prodidpm }}</td>
                        <td>{{ $item->angkatandpm }}</td>
                        <td>
                            <a href="{{ url('delete-vote-dpm', $item->id) }}"> <button
                                    class="btn btn-danger">delete</button></a>
                            <a href="{{ url('edit-vote-dpm', $item->id) }}"> <button
                                    class="btn btn-warning">update</button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="card-footer">{{ $dpmvote->links() }}</div>
    </div>
    @include('sweetalert::alert')
@endsection
