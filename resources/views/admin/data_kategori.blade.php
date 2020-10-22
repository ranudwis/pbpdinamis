@extends('partial.admin')

@section('menu')
	<a href="{{ url('/admin/dashboard') }}"><i class="fas fa-desktop"></i>Postingan Penulis</a>
	<a href="{{ url('/admin/data_kategori') }}" class="active"><i class="fas fa-book"></i>Data Kategori</a>
	<a href="{{ url('/admin/data_penulis') }}"><i class="fas fa-pencil-alt"></i>Data Penulis</a>
	<a href="{{ url('/admin/editprofil') }}" ><i class="fas fa-user-edit"></i>Edit Profil</a>
@endsection

@section('content')
	<table class="data-kategori">
		<tr>
			<td>Kategori 1</td>
			<td><a href=""><i class="fas fa-trash-alt"></i></a></td>
		</tr>
	</table>
@endsection