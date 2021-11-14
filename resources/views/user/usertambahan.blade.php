<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri Anda</title>
    {{-- <link rel="stylesheet" href="/css/login.css"> --}}
    
    <style>
* {
    box-sizing: border-box;
}

*:focus {
    outline: none;
}
body {
    font-family: Arial;
    /* background-image: url('https://3.bp.blogspot.com/-NmC6GIpYEG0/UQ5YRLDa_TI/AAAAAAAAACc/ZfN1zcPMfJU/s1600/DSC_1704.JPG'); */
    height: 100%;
    padding: 50px;
    background: url(/img/ub3edit.png) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-family: "poppins";
    font-size: 22px;
}
.login {
    margin: 50px auto;
    width: 300px;
}
.login-screen {
    background-color: rgba(255, 255, 255, 0.904);
    padding: 20px;
    padding-top: 1px;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.438),
        0 6px 20px 0 rgba(255, 255, 255, 0.514);
}

.app-title {
    text-align: center;
    color: #777;
    font-family: "poppins";
}

.login-form {
    text-align: center;
}
.control-group {
    margin-bottom: 10px;
}

input {
    text-align: center;
    background-color: #ecf0f1;
    border: 2px solid transparent;
    border-radius: 3px;
    font-size: 16px;
    font-weight: 200;
    padding: 10px 0;
    width: 250px;
    transition: border 0.5s;
}

input:focus {
    border: 2px solid #3498db;
    box-shadow: none;
}

.btn {
    border: 2px solid transparent;
    background: #3498db;
    color: #ffffff;
    font-size: 16px;
    line-height: 25px;
    padding: 10px 0;
    text-decoration: none;
    text-shadow: none;
    border-radius: 3px;
    box-shadow: none;
    transition: 0.25s;
    display: block;
    width: 250px;
    margin: 0 auto;
    font-family: "poppins";
    font-size: 20px;
}

.btn:hover {
    background-color: #2980b9;
}

.login-link {
    font-size: 12px;
    color: #444;
    display: block;
    margin-top: 12px;
}

@media (max-width: 480px) {
    body {
        font-family: Arial;
        background-image: url("https://3.bp.blogspot.com/-NmC6GIpYEG0/UQ5YRLDa_TI/AAAAAAAAACc/ZfN1zcPMfJU/s1600/DSC_1704.JPG");
        padding: 10px;
    }
}



     </style>
</head>

<body>
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Problem ?</h1>
            </div>
            <form method="POST" action="{{ route('usertambahan') }}">
                @csrf

                {{-- @if(session()->has('registerfailed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('registerfailed') }}
                    <button type="button" class="btn-close" data-bd-dismiss="alert" aria="Close"></button>
                </div>
                @endif --}}

                <div class="login-form">
                    <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="Nama Anda" id="login-name"
                            name="name" autofocus required>
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="Nomor Induk" id="login-name"
                            name="NIM"  required>
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('NIM')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="Mahasiswa / Dosen" id="login-name"
                            name="prodi"  required>
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('prodi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="Email Anda" id="login-name"
                            name="email"  required>
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="Tulis masalah Anda di sini..." id="login-name"
                            name="pesan"  required>
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('pesan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="hidden" class="login-field" value="628988624093" placeholder="" id="login-name"
                            name="nomor_wa">

                    {{-- <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="admin" id="flexCheckDefault" name="level">
                        <label class="form-check-label" for="flexCheckDefault">
                          Admin
                        </label>
                      </div>
                    @error('level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}

                    {{-- <div class="control-group">
                        <input type="password" class="login-field" value="" placeholder="password" id="login-name"
                            name="password">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}

                    <button type="submit" class="btn btn-primary">
                        {{ __('Kirim') }}
                    </button>
                    <br>
                    {{-- @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Sudah punya akun ? Login') }}</a>
                    @endif --}}
                </div>
            </form>
        </div>
    </div>
</body>

</html>
