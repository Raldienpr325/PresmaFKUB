@extends('user.main')
@section('donevote')
<div align="center" style="padding: 100px;font-family:georgia,garamond,serif;font-size:16px;font-style:italic">
    <h1> Terima kasih Atas Suara Anda ! </h1>
    <p>UB team-</p>
<a href="{{ url('vote-dpm') }}" class="btn btn-primary" style="font:20px 200">Vote DPM</a>
</div>

@endsection
