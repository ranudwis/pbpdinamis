@extends('partial.homepartial')

@section('title', 'Detail_Post')

@section('content')
    <a class="btn btn-lg btn-info tombol4" href="{{ url('/') }}">Kembali ke Halaman Utama</a>

    <div class="card post detailpost">
        <div class="card-body">
            <div class="row container-fluid">
              <div class="col-sm-4">
                  <img src="gb/film/shazam3.jpg" class="rounded" style="width:300px">
              </div>
              <div class="col-sm-8">
                <h1>{{ $post->judul }}</h1>
                <h4> Kategori : {{$post->kategori->nama}}</h4>
                <h4> Penulis : {{ $post->penulis->user->nama }}</h4>
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
              @csrf
                <div class="form-group">
                  <label for="nama" style="margin-top: 20px">Nama</label>
                  <input type="text" class="form-control" value="{{ auth()->user()->nama }}" required="required" disabled>
                </div>
                <div class="form-group">
                    <label for="comment">Komentar</label>
                    <textarea name ="isi" class="form-control" id="comment" rows="3" minlength="10" required=required></textarea>
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

    <a class="btn btn-lg btn-info tombol4" href="{{ url('/') }}">Kembali ke Halaman Utama</a>

@endsection