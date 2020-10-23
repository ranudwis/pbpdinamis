@extends('partial.dashboard_penulis')

@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" type="text/css" href="style.css">
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
