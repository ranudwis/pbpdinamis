@extends('partial.dashboard_penulis')

@section('menu')
<a href="{{ url('/penulis/dashboard') }}" class="active"><i class="fas fa-desktop"></i>Dashboard</a>
<a href="{{ url('/penulis/editprofile') }}"><i class="fas fa-pencil-alt"></i>Edit Profil</a>
<a href="{{ url('/penulis/post') }}"><i class="fas fa-desktop"></i>Daftar Postingan</a>
 <a href="{{ url('/penulis/tambahpost') }}"><i class="fas fa-book"></i>Tambah Postingan</a>
@endsection

@section('content')

    <section class="counter">
        <div class="container" style="margin-left: 15%">
            <h1 style="text-align: center;">Hello, {{ auth()->user()->nama }}</h1>    
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="count-card">
                        <i class="fas fa-book-reader"></i>
                        <span data-toggle="counter-up">{{ $totalTampilan }}</span>
                        <h3>Jumlah View Postingan</h3>
                        <p>jumlah penonton postingan Anda</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="count-card">
                        <i class="fas fa-user-plus"></i>
                        <span data-toggle="counter-up">{{ $totalPost }}</span>
                        <h3>Jumlah postingan</h3>
                        <p>jumlah postingan yang telah Anda publikasikan</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End counter Section -->
    
@endsection
