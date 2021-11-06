<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PRESMA AND DPM FKUB pull fany </title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href={{ asset('css/fontawesome-all.min.css') }} rel="stylesheet">
    <link href={{ asset('css/style.css') }} rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 id="headline">Countdown </h1>
        <div id="countdown">
            <ul>
                <li><span id="days"></span>days</li>
                <li><span id="hours"></span>Hours</li>
                <li><span id="minutes"></span>Minutes</li>
                <li><span id="seconds"></span>Seconds</li>
            </ul>
        </div>
        <div id="button">
            <a href="{{ url('opsi') }}"> <button class="btn btn-primary"> Go Vote !! </button></a>
        </div>

    </div>

</body>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    html,
    body {
        height: 100%;
        margin: 0;
    }

    body {
        align-items: center;
        background-color: #180e36;
        display: flex;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            background: url(/img/ubedit.png) no-repeat center center fixed; 
        -webkit-background-size: cover;
         -moz-background-size: cover;
        -o-background-size: cover;
         background-size: cover;
    }

    .container {
        color: white;
        margin: 0 auto;
        text-align: center;
        background-color: #e1e1e16b;
    }

    h1 {
        font-weight: normal;
        letter-spacing: 0.125rem;
        text-transform: uppercase;
    }

    li {
        display: inline-block;
        font-size: 1.5em;
        list-style-type: none;
        padding: 1em;
        text-transform: uppercase;
    }

    li span {
        display: block;
        font-size: 4.5rem;
    }

    .message {
        font-size: 4rem;
    }

    #content {
        display: none;
        padding: 1rem;
    }

    .emoji {
        padding: 0 0.25rem;
    }

    @media all and (max-width: 768px) {
        h1 {
            font-size: 1.5rem;
        }

        li {
            font-size: 1.125rem;
            padding: 0.75rem;
        }

        li span {
            font-size: 3.375rem;
        }
    }

</style>

<script>
    (function() {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        let theday = "Nov 14, 2021 00:00:00",
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

                    headline.innerText = "It's The day !! ";
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
