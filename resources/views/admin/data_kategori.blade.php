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
					<a href="dashboard_admin.html"><i class="fas fa-desktop"></i>Postingan Penulis</a>
					<a href="#" class="active"><i class="fas fa-book"></i>Data Kategori</a>
					<a href="data_penulis.html"><i class="fas fa-pencil-alt"></i>Data Penulis</a>
					<a href="edit_profil.html"><i class="fas fa-user-edit"></i>Edit Profil</a>
				</div>
			</div>
			<div class="col-sm">
				<table class="data-kategori">
					<tr>
						<td>Kategori 1</td>
						<td><a href=""><i class="fas fa-trash-alt"></i></a></td>
					</tr>
				</table>
			</div>	
		</div>
	</div>
@endsection