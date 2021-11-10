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

                @if(session()->has('failedlogin'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failedlogin') }}
                    <button type="button" class="btn-close" data-bd-dismiss="alert" aria="Close"></button>
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
                        <input type="text" class="login-field" placeholder="google_id" id="login-name"
                            name="google_id">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('google_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="level" id="login-name"
                            name="level">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="locale" id="login-name"
                            name="locale">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('locale')
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
