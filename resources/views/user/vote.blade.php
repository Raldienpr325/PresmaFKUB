<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background: url(/img/ub2.png) no-repeat center center fixed; 
        -webkit-background-size: cover;
         -moz-background-size: cover;
        -o-background-size: cover;
         background-size: cover;
        }
    </style>
</head>

<body>
    <p>ini adalah halaman vote</p>
    @foreach ($datas as $data)
        <h3>{{ $data->nama }}</h3>
        <h3>{{ $data->nim }}</h3>
    @endforeach










    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button href="#" class="dropdown-item">
            <i class="fas fa-bell mr-2"></i> Logout
        </button>
    </form>






</body>

</html>
