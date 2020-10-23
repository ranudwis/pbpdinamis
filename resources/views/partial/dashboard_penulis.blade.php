<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="bs/jquery.min.js"></script>
    <script src="bs/popper.min.js"></script>
    <script src="bs/js/bootstrap.min.js"></script>
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('penulis/style.css') }}">
    <title>@yield('title')</title>
    @yield('css')
</head>
<body>
    <header>
        <a href="/penulis/dashboard"><div class="judul">DASHBOARD <span>PENULIS</span></div></a>
        <a href="/logout"><button class="btn btn-danger btn-logout" name="logout" value="logout">Logout</button></a>
    </header>

    <div class="container dashboard">
        <div class="row" style="height: 100%; margin-bottom: -70px">
            <div class="col-sm menu">
                <div class="container">
                    <center>
                        <h4>{{ auth()->user()->nama }}</h4>
                    </center>
                    <a href="{{ url('/penulis/editprofile') }}"><i class="fas fa-pencil-alt"></i>Edit Profil</a>
                    <a href="{{ url('/penulis/post') }}"><i class="fas fa-desktop"></i>Daftar Postingan</a>
                    <a href="{{ url('/penulis/tambahpost') }}"><i class="fas fa-book"></i>Tambah Postingan</a>
                </div>
            </div>

            <div class="col-sm">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
