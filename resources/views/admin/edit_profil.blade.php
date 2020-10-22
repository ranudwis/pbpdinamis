@extends('partial.admin')

@section('menu')
	<a href="{{ url('/admin/dashboard_admin') }}"><i class="fas fa-desktop"></i>Postingan Penulis</a>
	<a href="{{ url('/admin/data_kategori') }}"><i class="fas fa-book"></i>Data Kategori</a>
	<a href="{{ url('/admin/data_penulis') }}"><i class="fas fa-pencil-alt"></i>Data Penulis</a>
	<a href="{{ url('/admin/editprofil') }}" class="active"><i class="fas fa-user-edit"></i>Edit Profil</a>
@endsection

@section('content')
	<form method="post" action="{{ url('/admin/editprofil') }}">
		@csrf
    	<table class="edit">
    		<tr>
    			<td><i class="fas fa-user"></i></td>
    			<td>
    				<input type="text" class="form-control" name="nama" autofocus placeholder="Nama" value="{{ $user->nama }}">
    			</td>
    		</tr>
    		<tr>
    			<td><i class="fas fa-envelope"></i></td>
    			<td>
    				<input type="text" class="form-control" name="email" placeholder="Email" value="{{ $admin->email }}">
    			</td>
    		</tr>
    		<tr>
    			<td><i class="fas fa-key"></i></td>
    			<td>
    				<input type="text" class="form-control" name="password" placeholder="Password" value="{{ $admin->password }}">
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
@endsection