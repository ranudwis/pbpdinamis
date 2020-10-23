@extends('partial.admin')

@section('menu')
	<a href="{{ url('/admin/dashboard') }}" class="active"><i class="fas fa-desktop"></i>Postingan Penulis</a>
	<a href="{{ url('/admin/data_kategori') }}"><i class="fas fa-book"></i>Data Kategori</a>
	<a href="{{ url('/admin/data_penulis') }}"><i class="fas fa-pencil-alt"></i>Data Penulis</a>
	<a href="{{ url('/admin/editprofil') }}"><i class="fas fa-user-edit"></i>Edit Profil</a>
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>
                    Kategori
                </th>
                <th>
                    Banyak postingan
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($kategori as $k)
                <tr>
                    <td>
                        {{ $k->nama }}
                    </td>
                    <td>
                        {{ $k->post_count }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
