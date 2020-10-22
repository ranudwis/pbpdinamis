@extends('partial.dashboard_penulis')

@section('title', 'Tambah Postingan')

@section('css')
<link rel="stylesheet" type="text/css" href="tambah.css">
@endsection

@section('content')

<div class="container" style="margin: 5%">
	<div class="card">
		<div class="card-header">Tambah postingan</div>
		<div class="card-body">
			@if ($errors->any())
			@foreach ($errors->all() as $e)
			<div>{{ $e }}</div>
			@endforeach
			@endif
			<form action="" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="judul">Judul</label>
          			<input type="text" class="form-control" name="judul" value="{{ $post->judul }}" />
        		</div>

        		<div class="form-group">
          			<label for="kategori">Kategori</label><br />
          			<select name="kategori">
          				@foreach ($kategori as $k)
          				@if ($k->id == $post->idkategori)
          				<option value="{{ $k->idkategori }}" selected>{{ $k->nama }}</option>
          				@else
          				<option value="{{ $k->idkategori }}">{{ $k->nama }}</option>
          				@endif
          				@endforeach
          			</select>
          		</div>

          		<div class="form-group">
          			<label for="isi">Isi post</label>
          			<textarea rows="5" class="form-control" name="isi">{{ $post->isipost }}</textarea>
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

@endsection