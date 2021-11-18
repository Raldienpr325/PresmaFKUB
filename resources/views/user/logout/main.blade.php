@extends('user.main')
@section('logout')

<div align="center" style="padding: 100px;font-family:georgia,garamond,serif;font-size:16px;font-style:italic">
    <h1> Terima kasih Sudah Berpartisipasi ! </h1>
    <p>Thanks To :</p>
     <img src="img/LOGO.png" width="240px" height="115px"  class="logoatas"> 
     <p>UB | BEM FK UB | DPM FK UB| PEMILWA FK UB</p>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="p-md-">
        @csrf
        <button href="#" class=" btn-dark btn-sm">
         Logout
        </button>
    </form>
</div>

@endsection
