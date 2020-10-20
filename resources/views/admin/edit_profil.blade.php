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
					<a href="data_kategori.html"><i class="fas fa-book"></i>Data Kategori</a>
					<a href="data_penulis.html"><i class="fas fa-pencil-alt"></i>Data Penulis</a>
					<a href="#" class="active"><i class="fas fa-user-edit"></i>Edit Profil</a>
				</div>
			</div>
			<div class="col-sm">
				<form name="login">
			    	<table class="edit">
			    		<tr>
			    			<td><i class="fas fa-user"></i></td>
			    			<td>
			    				<input type="text" class="form-control" name="nama" autofocus placeholder="Nama">
			    			</td>
			    		</tr>
			    		<tr>
			    			<td><i class="fas fa-envelope"></i></td>
			    			<td>
			    				<input type="text" class="form-control" name="email" placeholder="Email">
			    			</td>
			    		</tr>
			    		<tr>
			    			<td><i class="fas fa-key"></i></td>
			    			<td>
			    				<input type="text" class="form-control" name="password" placeholder="Password">
			    			</td>
			    		</tr>
			    		<tr>
			    			<td colspan="2">
			    				<center>
			    					<button type="submit" class="btn btn-primary btn-edit" name="submit" value="submit">Edit</button>
			    				</center>
			    			</td>
			    		</tr>
			    	</table>
				</form>	
			</div>	
		</div>
	</div>
@endsection