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
    <div class="jumbotron">
    </div>

    <!-- Nav Bar -->
    <nav
      class="navbar navbar-light navbar-expand-sm fixed-top"
    >
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">HOME</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">KATEGORI</a>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Kategori 1</a>
              <a class="dropdown-item" href="#">Kategori 2</a>
          </div>
        </li>
        <li>
          <input class="search" type="text" placeholder="Search..">
        </li>
        <li>
          <a class="btn btn-danger tombol" href="{{ url('/daftar') }}">Daftar</a>
        </li>
        <li>
          <a class="btn btn-info tombol2" href="{{ url('/login') }}">Login</a>
        </li>
      </ul>
    </nav>

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
          <h2>Hubungi kami</h2>
          <div class="content">
            <form action="#">
              <div class="email">
                <div class="text">Email</div>
                <input type="email" required>
              </div>
              <div class="msg">
                <div class="text">Pesan</div>
                <textarea name="pesan" id="pesan" cols="25" rows="2"></textarea>
              </div>
              <div class="btn">
                <button>Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </footer>


  </body>
</html>