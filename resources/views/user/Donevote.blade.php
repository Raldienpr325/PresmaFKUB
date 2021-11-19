@extends('user.main')
@section('donevote')
    <div align="center" style="padding: 100px;font-family:georgia,garamond,serif;font-size:16px;font-style:italic">
        <h1> Terima kasih Atas Suara Anda ! </h1>
        <p>Thanks To :</p>
        <img src="img/LOGO.png" width="240px" height="115px" class="logoatas">
        <p> UB | BEM FK UB | DPM FK UB| PEMILWA FK UB</p>
    </div>
    <style>
        h1 {
            font-size: 26px
        }

        .logoatas {
            margin-left: -30px
        }

        @media (min-width:360px) {}

        @media (min-width:320px) {

            /* smartphones, iPhone, portrait 480x320 phones */
            h1 {
                font-size: 16px
            }
        }

        @media (min-width:481px) {

            /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */
            h1 {
                font-size: 16px
            }
        }

        @media (min-width:641px) {

            /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */
            h1 {
                font-size: 16px
            }
        }

        @media (min-width:961px) {

            /* tablet, landscape iPad, lo-res laptops ands desktops */
            h1 {
                font-size: 16px
            }
        }

        @media (min-width:1025px) {

            /* big landscape tablets, laptops, and desktops */
            h1 {
                font-size: 16px
            }
        }

        @media (min-width:1281px) {

            /* hi-res laptops and desktops */
            h1 {
                font-size: 16px
            }
        }

    </style>

@endsection
