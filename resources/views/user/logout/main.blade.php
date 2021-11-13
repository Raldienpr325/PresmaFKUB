@extends('user.main')
@section('logout')

<div align="center" style="padding: 100px;font-family:georgia,garamond,serif;font-size:16px;font-style:italic">
    <h1> Terima kasih Sudah berpartisipasi ! </h1>
    <p>UB team-</p>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="p-md-">
        @csrf
        <button href="#" class=" btn-dark btn-sm">
         Logout
        </button>
    </form>
</div>
@endsection
