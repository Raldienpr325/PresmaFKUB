<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pemilwa UB | {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
        href="{{ asset('adminLTE/plugins') }}/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE/dist') }}/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/summernote/summernote-bs4.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-dark" style="background-color: #071828">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button href="#" class="dropdown-item">
                                <i class="fas fa-bell mr-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #071828">
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('img/ubbaru.png') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block" style="text-decoration: none">
                            {{ Auth::user()->name }}</a>
                        <!-- {{ Auth::user()->name }} diambil dari layouts/app.blade.php -->
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{ url('vote-presma') }}" class="nav-link">
                                <i class="nav-icon fas fa-user-check"></i>
                                <p>
                                    Vote Presma
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{ url('vote-dpm') }}" class="nav-link">
                                <i class="nav-icon fas fa-user-graduate"></i>
                                <p>
                                    Vote Dpm
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <section class="content">
                @yield('uvote-presma')
                @yield('uvote-dpm')
                @yield('donevote')
                @yield('logout')
            </section>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="{{ asset('adminLTE/plugins') }}/jquery/jquery.min.js"></script>

    <script src="{{ asset('adminLTE/plugins') }}/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('adminLTE/plugins') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('adminLTE/plugins') }}/chart.js/Chart.min.js"></script>
    <script src="{{ asset('adminLTE/plugins') }}/sparklines/sparkline.js"></script>
    <script src="{{ asset('adminLTE/plugins') }}/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('adminLTE/plugins') }}/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="{{ asset('adminLTE/plugins') }}/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{ asset('adminLTE/plugins') }}/moment/moment.min.js"></script>
    <script src="{{ asset('adminLTE/plugins') }}/daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('adminLTE/plugins') }}/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="{{ asset('adminLTE/plugins') }}/summernote/summernote-bs4.min.js"></script>
    <script src="{{ asset('adminLTE/plugins') }}/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('adminLTE/dist') }}/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{ asset('adminLTE/dist') }}/js/pages/dashboard.js"></script> --}}
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminLTE/dist') }}/js/demo.js"></script>

</body>

</html>
