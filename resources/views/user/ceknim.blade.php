<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Induk Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style2.css">
</head>

<body style="background: rgba(192, 192, 192, 0.788)">
  <img src="img/LOGO.png"   class="logoatas">
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url(img/bg1bang.png);"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            
            {{-- <h3>Selamat Datang Di <strong>Evote !!</strong></h3> --}}
            <form action="{{ route('ceknim') }}" method="post">
              @csrf

              @if(session()->has('failedceknim'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('failedceknim') }}
              </div>
              @endif

              <div class="form-group first" id="emailub">
                <label for="email">Email UB</label>
                <input type="text" class="form-control" value="{{ Auth::user()->email }}"  id="email" name="email" readonly>
              </div>
              <div >
                <label for="nama">Username</label>
                <input type="text" class="form-control" value="{{ Auth::user()->name }}"  id="nama" name="nama" readonly>
              </div>
              <div class="form-group last mb-3">
                <label for="NIM">NIM</label>
                <input type="text" class="form-control" placeholder="Masukkan NIM" id="NIM" name="NIM" autofocus>
              </div>
              <input type="submit" value="Login" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>


</body>

</html>

