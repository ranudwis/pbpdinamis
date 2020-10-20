@extends('partial.admin')

@section('content')
<header>
		<div class="judul">DASHBOARD <span>ADMIN</span></div>
		<button class="btn btn-danger btn-logout" name="logout" value="logout">Logout</button>	
	</header>
	<div class="container dashboard">
		<div class="row" style="height: 100%; margin-bottom: -70px">
			<div class="col-sm menu">
				<div class="container">
					<center>
					<h4>Nama Admin</h4>
					</center>
					<a href="#" class="active"><i class="fas fa-desktop"></i>Postingan Penulis</a>
					<a href="data_kategori.html"><i class="fas fa-book"></i>Data Kategori</a>
					<a href="data_penulis.html"><i class="fas fa-pencil-alt"></i>Data Penulis</a>
					<a href="edit_profil.html"><i class="fas fa-user-edit"></i>Edit Profil</a>
				</div>
			</div>
			<div class="col-sm">
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
			</div>	
		</div>
	</div>
@endsection