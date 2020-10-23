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
    <title>HOME</title>
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
              <a class="dropdown-item" href="">Kategori 1</a>
              <a class="dropdown-item" href="">Kategori 2</a>
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

    <div class="container postingan">

      <h1>POSTINGAN</h1>
      <div class="rectangle"></div>

      <div class="row post">
      @foreach ($post as $p)
            <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $p->judul }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $p->penulis->user->nama }}</h6>
                  <p class="card-text">
                    {{ $p->isipost }}
                  </p>
                  <a href="#" class="card-link">Selengkapnya</a>
                </div>
              </div>
            </div>
        @endforeach
      </div>
    </div>

    <div class="container postingan">

      <h1>REVIEW PENULIS</h1>
      <div class="rectangle"></div>

      <div id="carouselExampleIndicators" class="carousel slide review" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('gambar/joker2.jpg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block tulisanrev">
              <h5>anaknya aktif ya bund</h5>
              <p>iyadong sis, tarik sis</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('gambar/joker2.jpg') }}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block tulisanrev">
              <h5>TARIK SIS</h5>
              <p>SEMONGKOOO</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('gambar/joker2.jpg') }}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block tulisanrev">
              <h5>AKU INGIN</h5>
              <p>JOGET</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

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
