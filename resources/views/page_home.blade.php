@extends('layouts.majorio')

@section('title', 'Homepage')

@section('csscode', 'Homepage')

@section('content')
<!-- section  -->
<section class="homepage">

    <!-- container starts -->
    <div class="container-fluid">
    <div class="row">
        
        <!-- first column starts -->
        <div class="col">
        
        <figure class="main-bg">
            <img src="/images/bg-1.jpg" alt="">
        </figure>

        <div class="description">
            <h2 class="headline">MAJORIO</h2>
            <p>Sebuah Aplikasi berbasis Web yang dapat digunakan untuk menentukan Program Studi. MAJORIO berbasis pada penghitungan Fuzzy ANP dan TOPSIS.</p>
            <a href="{{ route('connect.get') }}" class="btn btn-primary">Take Test</a>
        </div>

        </div>

    </div>
    </div>
    <!-- container ends -->

</section>

<section></section>
@endsection
