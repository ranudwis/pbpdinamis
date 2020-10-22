@extends('partial.admin')

@section('menu')
	<a href="{{ url('/admin/dashboard') }}" class="active"><i class="fas fa-desktop"></i>Postingan Penulis</a>
	<a href="{{ url('/admin/data_kategori') }}"><i class="fas fa-book"></i>Data Kategori</a>
	<a href="{{ url('/admin/data_penulis') }}"><i class="fas fa-pencil-alt"></i>Data Penulis</a>
	<a href="{{ url('/admin/editprofil') }}"><i class="fas fa-user-edit"></i>Edit Profil</a>
@endsection

@section('content')
				<div class="dropdown">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Kategori
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
				    <button class="dropdown-item" type="button">Kategori 1</button>
				    <button class="dropdown-item" type="button">Kategori 2</button>
				    <button class="dropdown-item" type="button">Kategori 3</button>
				  </div>
				</div>
@endsection