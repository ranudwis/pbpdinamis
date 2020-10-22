@extends('partial.dashboard_penulis')

@section('content')
    <h2 style="text-align: center; font-family: Verdana;">Selamat Datang {{ auth()->user()->nama }}</h2>
@endsection