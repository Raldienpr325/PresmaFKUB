<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body style="background: url(img/bg2nibang.png  ) no-repeat ; background-attachment:fixed; background-size:cover ">
    <div class="login">
        <div class="login-screen">

    
            
            <div class="app-title">
                <h4>Masukkan Token Anda</h4>
            </div>

            @if(session()->has('false-token'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('false-token') }}
            </div>
            @endif

            @if(session()->has('already-token'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('already-token') }}
            </div>
            @endif

            <form method="POST" action="{{ route('cektoken') }}">
                @csrf

                <div class="control-group">
                    <input type="text" class="login-field" value="" placeholder="Token Anda" id="login-name"
                        name="token">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>

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
