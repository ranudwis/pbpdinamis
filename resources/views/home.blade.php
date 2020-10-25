@extends('partial.homepartial')

@section('title', 'Home')

@section('content')

    <div class="jumbotron"></div>

    <div class="container postingan">

      <h1>POSTINGAN</h1>
      <div class="rectangle"></div>

      <div class="dropdown dropright kategori">
        <button class="btn btn-success btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        @if (isset($kategoriDipilih))
          Kategori {{ $kategoriDipilih->nama }}
        @else
          Semua Kategori
        @endif
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/">Semua Kategori</a>
        @foreach ($kategori as $k)
          <a class="dropdown-item" href="/kategori/{{$k -> idkategori}}">{{$k -> nama}}</a>
        @endforeach
        </div>
      </div>

      <div class="row post">
      @foreach ($post as $p)
            <div class="col-sm-4">
              <div class="card tiap">
                <img class="gambar_post" src="{{ Storage::url($p->file_gambar) }}" alt="gambar {{ $p->judul }}">
                <div class="card-body text">
                  <h5 class="card-title judul_post">{{ $p->judul }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Kategori : {{ $p->kategori->nama }}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Penulis : {{ $p->penulis->user->nama }}</h6>
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

@endsection