<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Induk Mahasiswa</title>
    <link rel="stylesheet" href="/css/style2.css">
    <link rel="stylesheet" href="/css/style3.css">
</head>

<body>
   
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url(img/bg1bang.png);"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>Evote</strong></h3>

            @if(session()->has('failedlogin'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('failedlogin') }}
                <button type="button" class="btn-close" data-bd-dismiss="alert" aria="Close"></button>
            </div>
            @endif

            @if(session()->has('failedceknim'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('failedceknim') }}
                <button type="button" class="btn-close" data-bd-dismiss="alert" aria="Close"></button>
            </div>
            @endif
            <form method="POST" action="{{ route('ceknim') }}">
                @csrf

                <div class="control-group">
                    <input type="text" class="login-field" value="{{ Auth::user()->email }}" placeholder="" id="login-name"
                        name="email" readonly>
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>

                <div class="control-group">
                    <input type="text" class="login-field" value="{{ Auth::user()->name }}" placeholder="" id="login-name"
                        name="nama" readonly>
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>

                <div class="control-group">
                    <input type="text" class="login-field" value="" placeholder="NIM" id="login-name"
                    name="NIM" required>
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
      </div>
    </div>

    
  </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>


</html>
