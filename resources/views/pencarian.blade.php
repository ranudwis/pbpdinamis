@extends('partial.homepartial')

@section('title', 'Pencarian')

@section('content')

    <div class="container pencarian">
        <div class="hasil">
            <h2>Hasil Pencarian</h2>
            <div class="rectangle"></div>
        </div>
      <div class="row post">
      @foreach ($post as $p)
            <div class="col-sm-4">
              <div class="card tiap">
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
@endsection