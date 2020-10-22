@extends('partial.dashboard_penulis')

@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" type="text/css" href="dashboard.css">
@endsection

@section('content')

    <section class="counter">
        <div class="container">
            <h1 style="text-align: center;">Hello, {{ auth()->user()->nama }}</h1>    
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="count-card">
                        <i class="fas fa-book-reader"></i>
                        <span data-toggle="counter-up">{{ $totalTampilan }}</span>
                        <h3>Jumlah View Postingan</h3>
                        <p>The objective of this guideline is to provide best practice guidance to improve the ability</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-card">
                        <i class="fas fa-user-plus"></i>
                        <span data-toggle="counter-up">{{ $totalPost }}</span>
                        <h3>Jumlah postingan</h3>
                        <p>The objective of this guideline is to provide best practice guidance to improve the ability</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End counter Section -->
    
@endsection
