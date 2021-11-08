<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Induk Mahasiswa</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div class="login">
        <div class="login-screen">

            @if(session()->has('failedlogin'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('failedlogin') }}
                <button type="button" class="btn-close" data-bd-dismiss="alert" aria="Close"></button>
            </div>
            @endif
            
            <div class="app-title">
                <h4>Masukkan NIM Anda</h4>
            </div>

            <form method="POST" action="{{ route('ceknim') }}">
                @csrf

                <div class="control-group">
                    <input type="text" class="login-field" value="" placeholder="Nama" id="login-name"
                        name="nama">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>

                <div class="control-group">
                    <input type="text" class="login-field" value="" placeholder="NIM" id="login-name"
                    name="NIM">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="pemilih" id="flexCheckDefault" name="level">
                    <label class="form-check-label" for="flexCheckDefault">
                      Pemilih
                    </label>
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
