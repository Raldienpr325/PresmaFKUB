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
                <h1>Login Admin</h1>
            </div>

            <form method="POST" action="{{ route('loginadmin') }}">
                @csrf

                <div class="login-form">
                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="username" id="login-name"
                            name="username">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('username')
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
                    <br>
                    @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</body>

</html>
