@extends('partial.homepartial')

@section('title', 'Detail_Post')

@section('content')
    
    <div class="jumbotron"></div>
    
    <a class="btn btn-lg btn-info tombol4" href="{{ url('/') }}">Kembali ke Halaman Utama</a>

    <div class="card post detailpost">
        <div class="card-body">
            <div class="row container-fluid">
              <div class="col-sm-4">
                  <img src="{{ Storage::url($post->file_gambar) }}" class="rounded gambar_detail" style="width:300px">
              </div>
              <div class="col-sm-8">
                <h1 class="judul_post">{{ $post->judul }}</h1>
                <h4> Kategori : {{$post->kategori->nama}}</h4>
                <h4> Penulis : {{ $post->penulis->user->nama }}</h4>
                <p class="card-text deskripsi" style="text-align: justify;">{{ $post->isipost }}</p>	
              </div>
            </div>
        </div>
    </div>

    <div class = "row container-fluid komentar">
      <div class = "col-sm-7">
        <div class="card post detailpost" style="margin-right:0">
            <div class="card-body">
              <h3 class="judul_post">Kolom Komentar</h3>
              @foreach ($post->komentar as $komen)
                <div class="container komen">
                  <h5>{{$komen->penulis->user->nama}}</h5>
                  <p>{{$komen->isi}}</p>
                  @auth
                    @if(auth()->user()->penulis)
                      @if( auth()->user()->penulis->idpenulis == $komen->post->idpenulis)
                        <a href="/detailpost/hapus/{{$komen->idkomentar}}" class="btn btn-sm tombol5">Hapus Komentar</a>
                      @endif
                    @endif
                  @endauth
                </div>
              @endforeach
            </div>
        </div>
      </div>
      <div class = "col-sm-5">
        <div class="card post detailpost" style="margin-right:20px">
            <div class="card-body">
              <h3 class="judul_post">Komentar</h3>
              @auth
                @if (auth()->user()->penulis)
                  <form method="POST" autocomplete="on" action="" style="margin-top: 10px">
                  @csrf
                    <div class="form-group">
                        <textarea name ="isi" class="form-control" id="comment" rows="3" minlength="10" required=required></textarea>
                    </div>
                    <button type="submit" class="btn tombol3">KIRIM</button>	
                  </form>
                @else
                  <h6 class="peringatan">*Admin tidak bisa memberikan komentar</h6>
                @endif
              @endauth

              @guest
                <h6 class="peringatan">*Harus Login sebagai penulis untuk Komentar</h6>
              @endguest
            </div>
        </div>
      </div>
    </div>

    <a class="btn btn-lg btn-info tombol4" href="{{ url('/') }}">Kembali ke Halaman Utama</a>

@endsection