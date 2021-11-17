<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Induk Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <form action="{{ route('ceknim') }}" method="post">
              @csrf

              @if(session()->has('failedceknim'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('failedceknim') }}
              </div>
              @endif

              <div class="form-group first">
                <label for="email"></label>
                <input type="text" class="form-control" value="{{ Auth::user()->email }}" placeholder="" id="email" name="email" readonly>
              </div>
              <div class="form-group first">
                <label for="nama">Username</label>
                <input type="text" class="form-control" value="{{ Auth::user()->name }}" placeholder="" id="nama" name="nama" readonly>
              </div>
              <div class="form-group last mb-3">
                <label for="NIM">NIM</label>
                <input type="text" class="form-control" placeholder="Masukkan NIM" id="NIM" name="NIM" autofocus>
              </div>
              <input type="submit" value="VOTE !!" class="btn btn-block btn-primary">
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
