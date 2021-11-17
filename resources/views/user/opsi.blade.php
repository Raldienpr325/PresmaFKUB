<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PRESMA AND DPM FKUB</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href={{ asset('css/fontawesome-all.min.css') }} rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/fontawesome-free/css/all.min.css">
    <link href={{ asset('css/style.css') }} rel="stylesheet">
</head>

<body >
    <img src="img/LOGO.png" width="240px" height="115px"  class="logoatas">
    <section class="services d-flex align-items-center py-5" id="services">
        
        <div class="container text-light">
            <div class="text-center pb-4">
                <h1 id="headline">Countdown </h1>
                <div id="countdown" >
                    <ul>
                        <li class="tes1"><span id="days"></span><br>Hari</li>
                        <li class="tes1"><span id="hours"></span><br>Jam</li>
                        <li class="tes1"><span id="minutes"></span><br>Menit</li>
                        <li class="tes1"><span id="seconds"></span><br>Detik</li>
                    </ul>
                </div>
                <p class="selamat-datang">Selamat Datang di PEMILWA Fakultas Kedokteran Universitas Brawijaya 2021 </p>
                <h2 class="py-2"></h2>
     
                <br>

                @if(session()->has('failedlogin'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failedlogin') }}
                
                </div>
                @endif
    
                @if(session()->has('failedrelogin'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failedrelogin') }}
                  
                </div>
                @endif
                {{-- <div class="app-title">
                    <h4>Harap Login Menggunakan Email UB</h4>
                </div> --}}
                <br>
                <div id="button">
                    <form method="get" action="{{ route('google.login') }}">
                        @csrf
        
                        <div class="login-form">
        
                            <button type="submit" class="btn btn-primary">
                                {{ __('LOGIN') }}
                            </button>
        
                        </div>
                    </form>
                    <div id="button" style="position: fixed; bottom: 60px; right: 20px;">
                        <h5>Need help?</h5>
                        <a href="{{ url('user-service') }}" ><img src="img/wabang.png" width="45px" height="40px">Contact Us</a>
                    </div>
                    
                </div>
             
            </div>
        </div>
    </section>
    
</body>
<style>
    body{
        background: url(img/bg1bang.png);
        background-attachment: fixed;
        background-repeat: no-repeat;   
        background-size: cover;
    
    }
    li {
        margin-top: -1.2em;
        display: inline-block;
        font-size: 0.8em;
        list-style-type: none;
        padding: 1em;
        text-transform: uppercase;
    }
</style>

<script>
    (function() {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        let theday = "Nov 17, 2021 22:39:30",
            countDown = new Date(theday).getTime(),
            x = setInterval(function() {
                let now = new Date().getTime(),
                    distance = countDown - now;

                (document.getElementById("days").innerText = Math.floor(distance / day)),
                (document.getElementById("hours").innerText = Math.floor(
                    (distance % day) / hour
                )),
                (document.getElementById("minutes").innerText = Math.floor(
                    (distance % hour) / minute
                )),
                (document.getElementById("seconds").innerText = Math.floor(
                    (distance % minute) / second
                ));

                if (distance < 0) {
                    let headline = document.getElementById("headline"),
                        countdown = document.getElementById("countdown"),
                        content = document.getElementById("content"),
                        btn = document.getElementById("button");

                    headline.innerText = "ATLANTIS PEMILWA ";
                    btn.style.display = "block"
                    countdown.style.display = "none";
                    content.style.display = "block";
                    clearInterval(x);
                }
                if (distance > 0) {
                    let btn = document.getElementById("button");
                    btn.style.display = "none ";
                }
            }, 0);
    })();
    
</script>
</html>
