@extends('partial.dashboard_penulis')

@section('title', 'Daftar Postingan')

@section('css')
<link rel="stylesheet" type="text/css" href="style.css">
@endsection

@section('content')

  <div class="container" style="margin-left: 8%;">
    <div class="row">
        @foreach ($post as $p)
        <div class="col-md-4">
            <div class="single-blog-item">
                <div class="blog-thumnail">
                    <a href=""><img src="{{ Storage::url($p->file_gambar) }}" alt="blog-img" style="height: 50%"></a>
                </div>

                <div class="blog-content">
                    <h4><a href="#">{{ $p->judul }}</a></h4>
                    <p>{{ $p->isipost }}</p>
                    <a href="/penulis/edit/{{ $p->idpost }}"><button name="edit" class="btn btn-primary">Edit</button></a>
                    <a href="/penulis/hapus/{{ $p->idpost }}"><button name="hapus" class="btn btn-danger">Hapus</button></a>
                </div>
            </div>
            <span class="blog-date">{{ $p->tgl_insert }}</span>
        </div>

    @endforeach

@endsection