<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet"
            href="{{ asset('adminLTE/plugins') }}/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('adminLTE/dist') }}/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/summernote/summernote-bs4.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
 

<body>
     {{-- <style>
        body{
            background: url(/img/ub2.png) no-repeat center center fixed; 
        -webkit-background-size: cover;
         -moz-background-size: cover;
        -o-background-size: cover;
         background-size: cover;
        }
    </style>  --}}
    @foreach ($datas as $data)
    <div class="row p-md-4">
        <div class="col-md-4">
            <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-info">
                  <h3 class="widget-user-username">{{ $data->nama }}</h3>
                </div>
                <div class="widget-user-image">
                    <img src="{{ asset('storage/'. $data->foto) }}" style="max-height: 140px" alt="User Avatar" class="card-img-top">
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header">Prodi : {{ $data->prodi }}</h5>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <span class="btn btn-danger" style="margin: 20px">Vote</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Angkatan : {{ $data->angkatan }}</h5>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
              </div>
        </div>
    </div>
    @endforeach
   
    
    {{-- @foreach ($datas as $data)
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/'. $data->foto) }}" style="max-height: 140px" alt="" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $data->nama }}</h5>
          <a href="#"><button class="btn btn-danger">Vote</button></a>
        </div>
      </div>
        <h3>{{ $data->angkatan }}</h3>
        <h3>{{ $data->prodi }}</h3>
    @endforeach --}}

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="p-md-4">
        @csrf
        <button href="#" class=" btn-danger btn-sm">
         Logout
        </button>
    </form>
</body>

</html>
