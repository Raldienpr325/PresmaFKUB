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
            <form method="POST" action="{{ route('login') }}">
                @csrf

                @if(session()->has('registerfailed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('registerfailed') }}
                    <button type="button" class="btn-close" data-bd-dismiss="alert" aria="Close"></button>
                </div>
                @endif

                <div class="login-form">
                    <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="username" id="login-name"
                            name="username" autofocus>
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="admin" id="flexCheckDefault" name="level">
                        <label class="form-check-label" for="flexCheckDefault">
                          Admin
                        </label>
                      </div>
                    @error('level')
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
