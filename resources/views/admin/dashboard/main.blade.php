@extends('admin.main')
@section('vote')
<div class="content">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Tahun Angkatan</th>
                <th>action</th>
            </tr>
            {{-- @foreach ($dtvote as $item) --}}
                <tr>
                    <td>   
                        {{-- <img src="{{ asset('storage/'. $item->foto) }}" style="max-height: 140px"> --}}
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    {{-- <td>
                        <a href="{{ url('delete-vote', $item->id) }}"> <button
                                class="btn btn-danger">delete</button></a>
                        <a href="{{ url('edit-vote', $item->id) }}"> <button
                                class="btn btn-warning">update</button></a>
                    </td> --}}
                </tr>
            {{-- @endforeach --}}
        </table>
    </div>
    {{-- <div class="card-footer">{{ $dtvote->links() }}</div> --}}
</div>
@include('sweetalert::alert')
@endsection
