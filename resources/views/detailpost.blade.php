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

    <h1 style="text-align: center; margin-top: 20px;">DETAIL POST</h1>

        <div class="row container-fluid">
            <div class="col-sm-12" style="margin-top: 20px">
                <div class="card post">
                    <div class="card-body">
                        <div class="row container-fluid">
                        <div class="col-sm-3">
                            <img src="gb/film/shazam3.jpg" class="rounded" style="width:300px">
                        </div>
                        <div class="col-sm-9">
                        <h3>Shazam</h3>
                        <p class="card-text" style="text-align: justify;">Masih bocah, Billy Batson hanyalah seorang remaja biasa yang punya kehidupan ngenes. Ia sering berpindah-pindah karena kerap mendapatkan masalah. Namun, jauh di lubuk hatinya, Billy adalah anak baik.

                            Ia kerap membantu anak-anak di seusianya yang sering mendapatkan perlakukan persekusi. Salah satunya adalah Freddy Freeman (Jack Dylan Grazer) sahabat barunya. Namun, di satu tempat, Billy kemudian bertemu dengan hal-hal yang terkait dengan sihir.
                            
                            Seorang kakek tua memaksa Billy menyebutkan nama Shazam. Tak percaya, Billy akhirnya justru mendapati dirinya sendiri sebagai soerang yang memiliki kekuatan besar. Usianya tidak terlihat seperti bocah 14 tahun. Kecerdasannya meningkat, bak seorang ilmuwan.
                            
                            Ia bisa berganti menjadi seorang superhero dengan enam kemampuan luar biasa dari dewa-dewa hanya dengan meneriakkan Shazam!
                            
                            Enam kekuatan yang membuatnya kini tak hanya menjadi bocha biasa, namun punya tanggung jawab lebih. Tapi, tetap saja, jiwanya adalah jiwa anak-anak yang polos, dan apa adanya.
                            
                            Bagaimana Billy melewati masa-masa dari identitas barunya? Apakah ia bertemu dengan lawan yang kuat atau superhero lain? Jawabannya hanya ada pada film Shazam! yang siap tayang di bioskop pada tanggal 3 April di bioskop Indonesia.
                        </p>		  
                        </div>
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