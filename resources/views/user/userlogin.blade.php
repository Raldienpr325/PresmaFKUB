<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h4>Login Dengan Email UB!</h4>
            </div>

            <form method="get" action="{{ route('google.login') }}">
                @csrf

                <div class="login-form">

                    <button type="submit" class="btn btn-primary">
                        {{ __('LOGIN') }}
                    </button>

                </div>
            </form>
        </div>
    </div>
</body>

</html>
