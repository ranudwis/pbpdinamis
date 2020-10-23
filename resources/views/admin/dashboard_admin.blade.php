@extends('partial.admin')

@section('menu')
	<a href="{{ url('/admin/dashboard') }}" class="active"><i class="fas fa-desktop"></i>Dashboard</a>
	<a href="{{ url('/admin/data_kategori') }}"><i class="fas fa-book"></i>Data Kategori</a>
	<a href="{{ url('/admin/data_penulis') }}"><i class="fas fa-pencil-alt"></i>Data Penulis</a>
	<a href="{{ url('/admin/editprofil') }}"><i class="fas fa-user-edit"></i>Edit Profil</a>
@endsection

@section('content')
	
@endsection