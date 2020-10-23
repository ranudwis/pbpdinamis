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

    <h1 style="text-align: center; margin-top: 20px;">----------------------------- DETAIL POST -----------------------------</h1>

    <div class="card post detailpost">
        <div class="card-body">
            <div class="row container-fluid">
              <div class="col-sm-4">
                  <img src="gb/film/shazam3.jpg" class="rounded" style="width:300px">
              </div>
              <div class="col-sm-8">
                <h1>{{ $post->judul }}</h1>
                <h3> Penulis : {{ $post->penulis->user->nama }}</h3>
                <p class="card-text deskripsi" style="text-align: justify;">{{ $post->isipost }}</p>	
              </div>
            </div>
        </div>
    </div>

    <div class = "row container-fluid komentar">
      <div class = "col-sm-6">
        <div class="card post detailpost">
            <div class="card-body">
              <h3>Komentar</h3>
              <form method="POST" autocomplete="on" action="" style="margin-top: 10px">
                <div class="form-group">
                  <label for="nama" style="margin-top: 20px">Nama</label>
                  <input type="text" class="form-control" id="nama" maxlength="50" required="required">
                </div>
                <div class="form-group">
                    <label for="comment">Komentar</label>
                    <textarea class="form-control" id="comment" rows="3" minlength="10" required=required></textarea>
                </div>
                <button type="submit" class="btn tombol3">KIRIM</button>	
              </form>	
            </div>
        </div>
      </div>
      <div class = "col-sm-6">
        <div class="card post detailpost">
            <div class="card-body">
              <h3>Kolom Komentar</h3>
              @foreach ($post->komentar as $komen)
                <div class="container komen">
                  <h5>{{$komen->penulis->user->nama}}</h5>
                  <p>{{$komen->isi}}</p>
                </div>
              @endforeach
            </div>
        </div>
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