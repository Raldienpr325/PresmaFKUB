@extends('user.main')
@section('donevote')
<div align ="center" style="padding: 100px;font-family:georgia,garamond,serif;font-size:16px;font-style:italic">
    <h1> Terima kasih Atas Suara Anda ! </h1>
    <p>Thanks To :</p>
     <img src="img/LOGO.png" width="240px" height="115px"  class="logoatas">
     <p> UB | BEM FK UB | DPM FK UB| PEMILWA FK UB</p>
</div>
<style>
    h1{
        font-size: 26px
    }
    .logoatas{
        margin-left: -30px
    }

    @media (min-width:360px){
        h1{
            font-size: 16px
        }
        
    }
</style>

@endsection
