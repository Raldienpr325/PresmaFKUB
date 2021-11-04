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
                <h1>Register</h1>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="login-form">
                    <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="name" id="login-name"
                            name="name" autofocus>
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="Email Address" id="login-name"
                            name="email">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="control-group">
                        <input type="password" class="login-field" value="" placeholder="password" id="login-name"
                            name="password">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="control-group">
                        <input type="password" class="login-field" value="" placeholder="Confirm Password" id="login-pass"
                            name="password_confirmation">
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                    <br>
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Sudah punya akun ? Login') }}</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</body>

</html>
