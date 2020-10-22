@extends('partial.admin')

@section('menu')
	<a href="{{ url('/admin/dashboard_admin') }}"><i class="fas fa-desktop"></i>Postingan Penulis</a>
	<a href="{{ url('/admin/data_kategori') }}"><i class="fas fa-book"></i>Data Kategori</a>
	<a href="{{ url('/admin/data_penulis') }}" class="active"><i class="fas fa-pencil-alt"></i>Data Penulis</a>
	<a href="{{ url('/admin/editprofil') }}"><i class="fas fa-user-edit"></i>Edit Profil</a>
@endsection

@section('content')
	<div class="card password">
		<form method="get" action="">
			@csrf
			<div class="card-header">{{ auth()->user()->nama }}</div>
			<div class="card-body">
				<label style="margin-bottom: 10px">Password Baru</label>
				<input type="text" class="form-control" name="password" placeholder="Password">
				<button class="btn btn-primary editpassword" type="submit">Edit</button>
			</div>
		</form>
	</div>
@endsection