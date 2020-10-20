<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <!-- jQuery library -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
  <title>Tambah postingan</title>
  <style>
    .require {
      color: #666;
    }

    label small {
      color: #999;
      font-weight: normal;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card-header">Tambah postingan</div>
      <div class="card-body">
        @if ($errors->any())
        @foreach ($errors->all() as $e)
        <div>{{ $e }}</div>
        @endforeach
        @endif
        <form action="" method="POST"  enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" />
          </div>

          <div class="form-group">
            <label for="kategori">Kategori</label><br />
            <select name="kategori">
              @foreach ($kategori as $k)
              <option value="{{ $k->idkategori }}">{{ $k->nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="isi">Isi</label>
            <textarea rows="5" class="form-control" name="isi" ></textarea>
          </div>

          <div class="form-group">
            <input type="file" accept="image/*" name="gambar">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">
              Create
            </button>
            <button class="btn btn-danger">
              Cancel
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>