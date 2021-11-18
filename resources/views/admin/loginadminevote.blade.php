<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login Admin</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body style="background: url(img/bg2nibang.png  ) no-repeat ; background-attachment:fixed; background-size:cover ">
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Login Admin</h1>
            </div>

            <form method="POST" action="{{ route('loginadmin') }}">
                @csrf

                @if(session()->has('failedlogin'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failedlogin') }}
                   
                </div>
                @endif

                <div class="login-form">
                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="name" id="login-name"
                            name="name">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="email" id="login-name"
                            name="email">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="control-group">
                        <input type="password" class="login-field" value="" placeholder="password" id="login-pass"
                            name="password">
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                  
                </div>
            </form>
        </div>
    </div>
</body>

</html>
