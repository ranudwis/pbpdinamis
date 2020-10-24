@extends('partial.homepartial')

@section('title', 'Home')

@section('content')

    <div class="container postingan">

      <h1>POSTINGAN</h1>
      <div class="rectangle"></div>

      <!-- <div class="dropdown kategori">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div> -->

      <div class="row post">
      @foreach ($post as $p)
            <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                <img src="" alt="gambar {{ $p->judul }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $p->judul }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $p->penulis->user->nama }}</h6>
                  <p class="card-text">
                  {{ substr($p->isipost, 0, 80) }} ....
                  </p>
                  <a href="/detailpost/{{ $p->idpost }}" class="card-link">Selengkapnya</a>
                </div>
              </div>
            </div>
        @endforeach
      </div>
    </div>

    <div class="container postingan">

      <h1>MOTIVATIONAL QUOTES</h1>
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
@endsection