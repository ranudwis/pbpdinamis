<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
 <!-- jQuery library -->
 <script src="jquery.min.js"></script>
 <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
 <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
  <title>Daftar postingan penulis</title>
  <style>
    img {
      width: 100%;
      height: auto;
    }

    .single-blog-item {
      border: 1px solid #dfdede;
        box-shadow: 2px 5px 10px #dfdede;
        margin: 15px auto;
        padding: 5px;
        position: relative;
    }

    .blog-content {
        padding: 15px;
    }

    .blog-content h4 {
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 10px;
        text-transform: uppercase;
    }

    .blog-content h4 a{
      color:#777;
    }

    .blog-content p{
        color: #999;
        font-size: 14px;
        font-weight: 300;
        line-height: 1.3333;
    }

    .blog-date{
    }

    .blog-date {
        position: absolute;
        background: #337ab7;
        top: 35px;
        left: 5px;
        color: #fff;
        border-radius: 0 25px 25px 0;
        padding: 5px 15px;
        font-weight: 700;
    }

    .more-btn {
      background: #337ab7;
      border-radius: 2px;
      display: block;
        height: 30px;
        line-height: 30px;
        margin: 30px auto auto auto;
        text-align: center;
        width: 110px;
        color: #f1f1f1;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      @foreach ($post as $p)
      <div class="col-md-4">
        <div class="single-blog-item">
          <div class="blog-thumnail">
            <a href=""><img src="{{ Storage::url($p->gambar) }}" alt="blog-img" style="height: 50%"></a>
          </div>
          <div class="blog-content">
            <h4><a href="#">{{ $p->judul }}</a></h4>
            <p>{{ $p->isipost }}</p>
            <button name="edit" class="btn btn-primary">Edit</button>
            <button name="hapus" class="btn btn-danger">Hapus</button>
          </div>
          <span class="blog-date">{{ $p->tgl_insert }}</span>
        </div>
      </div>
      @endforeach
</body>
</html>