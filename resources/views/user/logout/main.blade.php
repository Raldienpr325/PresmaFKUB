@extends('user.main')
@section('logout')

    <div align="center" style="padding: 100px;font-family:georgia,garamond,serif;font-size:16px;font-style:italic">
        <h1> Terima kasih Sudah Berpartisipasi ! </h1>
        <p>Thanks To :</p>
        <img src="img/LOGO.png" width="240px" height="115px" class="logoatas">
        <p>UB | BEM FK UB | DPM FK UB| PEMILWA FK UB</p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="p-md-">
            @csrf
            <button href="#" class=" btn-dark btn-sm">
                Logout
            </button>
        </form>
    </div>
    <style>
        h1 {
            font-size: 26px
        }

        .logoatas {
            margin-left: -30px
        }


        @media (min-width:320px) {

            /* smartphones, iPhone, portrait 480x320 phones */
            h1 {
                font-size: 16px
            }
        }

        @media (max-width:320px) {

            /* smartphones, iPhone, portrait 480x320 phones */
            h1 {
                font-size: 14px;
            }

            .logoatas {
                height: 120px;
                width: 220px;

            }

            p {
                font-size: 10px
            }
        }

        @media (max-width:300px) {

            /* smartphones, iPhone, portrait 480x320 phones */
            h1 {
                font-size: 10px;
            }

            .logoatas {
                height: 70px;
                width: 120px;

            }

            p {
                font-size: 8px
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

            p {
                font-size: 12px
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
