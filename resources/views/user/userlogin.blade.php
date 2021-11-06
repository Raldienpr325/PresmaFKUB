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
                <h1>Login</h1>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="login-form">
                    <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="email" id="login-name"
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
                    @if (Route::has('password.request'))
                        <br> <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <br>
                    @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    {{-- <br> --}}
                    {{-- <a class="nav-link" href="{{ route('google.login') }}">{{ __('Login With Google') }}</a> --}}
                </div>
            </form>
        </div>
    </div>
</body>

</html>
