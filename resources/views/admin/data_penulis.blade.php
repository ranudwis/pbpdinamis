@extends('partial.admin')

@section('menu')
	<a href="{{ url('/admin/dashboard') }}"><i class="fas fa-desktop"></i>Postingan Penulis</a>
	<a href="{{ url('/admin/data_kategori') }}"><i class="fas fa-book"></i>Data Kategori</a>
	<a href="{{ url('/admin/data_penulis') }}" class="active"><i class="fas fa-pencil-alt"></i>Data Penulis</a>
	<a href="{{ url('/admin/editprofil') }}"><i class="fas fa-user-edit"></i>Edit Profil</a>
@endsection

@section('content')
			<table class="table table-hover datapenulis">
				@foreach ($penulis as $p)
				<tr>
					<td style="width: 550px">{{ $p->user->nama }}</td>
					<td><a href="{{ url('/admin/edit_penulis/' . $p->idpenulis) }}"><i class="fas fa-key kunci"></i></a></td>
				</tr>
				@endforeach
			</table>
@endsection