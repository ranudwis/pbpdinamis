<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('homepage/style.css') }}"> />
    <script src="{{ asset('bootstrap/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar fixed-top">
      <div id=judul>
        <a href="#">DUNIA PENUH CERITA</a>
      </div>
        <input class="search" type="text" placeholder="Search..">
        <ul>
        @auth
          @if (auth()->user()->penulis)
          <li>
            <a class="btn btn-info tombol2" href="{{ url('/penulis/dashboard') }}">Dasboard Penulis</a>
          </li>
          <li>
            <a class="btn btn-danger tombol2" href="/logout">Logout</a>
          </li>
            
          @else
          <li>
            <a class="btn btn-info tombol2" href="{{ url('/admin/dashboard') }}">Dasboard Admin</a>
          </li>
          <li>
            <a class="btn btn-danger tombol2" href="/logout">Logout</a>
          </li>
          @endif
        @endauth

        @guest
          <li>
            <a class="btn btn-danger tombol" href="{{ url('/daftar') }}">Daftar</a>
          </li>
          <li>
            <a class="btn btn-info tombol2" href="{{ url('/login') }}">Login</a>
          </li>
        @endguest
        </ul>
    </nav>

    <div class="jumbotron"></div>
    

    @yield('content')

    <footer>
      <div class="main-content">
        <div class="left box">
          <h2>Tentang kami</h2>
          <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi doloribus dolore iure molestias vel, facere quia nobis explicabo similique, quos commodi, culpa non asperiores reprehenderit earum deserunt. Dolore, dignissimos! Accusamus!</p>
          </div>
        </div>

        <div class="right box">
          <h2>ANGGOTA TIM</h2>
          <div class="content">
            <table id="anggota">
              <tr>
                <td>
                  Setiyoningsih
                </td>
                <td>
                  (24060118120033)
                </td>
              </tr>
              <tr>
                <td>
                Latifah Arum Sari
                </td>
                <td>
                (24060118130080)
                </td>
              </tr>
              <tr>
                <td>
                  Dandi Arimansyah
                </td>
                <td>
                  (24060118130093)
                </td>
              </tr>
              <tr>
                <td>
                Ranu Dwi Setiadi
                </td>
                <td>
                (24060118120095)
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </footer>


  </body>
</html>