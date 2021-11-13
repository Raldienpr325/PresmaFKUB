<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri Pemilih</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div class="login">
        <div class="login-screen">
            
            <div class="app-title">
                <h4>Masukkan Data Diri Anda</h4>
            </div>

            <form method="POST" action="{{ route('datadiripemilih') }}">
                @csrf

                <div class="control-group">
                    <input type="text" class="login-field" value="{{ $kirimtoken }}" placeholder="" id="login-name"
                        name="token" readonly>
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>

                <div class="control-group">
                    <input type="text" class="login-field" value="" placeholder="Nama" id="login-name"
                        name="nama">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>

                <div class="control-group">
                    <input type="text" class="login-field" value="" placeholder="Nomor Induk" id="login-name"
                    name="NIP">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>
                
                {{-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="pemilih" id="flexCheckDefault" name="level">
                    <label class="form-check-label" for="flexCheckDefault">
                      Pemilih
                    </label>
                  </div> --}}

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
