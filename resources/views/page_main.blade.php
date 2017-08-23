@extends('layouts.majorio')

@section('title', 'Halaman Utama')
@section('csscode', 'main-page')

@section('content')
<section>
    <div class="container">
    <div class="row">
        <div class="col">
        <h3 class="text-center">Hai, <span class="user">{{ $name }}</span></h3>
        </div>
    </div>
    </div>
</section>

<section class="container-main">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mx-auto">

                <!-- breadcrumb starts -->
                <div class="breadcrumb px-0">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                        class="float-right">Keluar (Logout)</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
                <!-- breadcrumb ends -->

                <div class="row">

                    <!-- first column starts -->
                    <div class="col">
                        
                        <!-- main item starts -->
                        <div class="main-item text-center">
                            <a href="{{ route('quiz') }}">
                                <div class="btn">
                                        Ambil Test
                                </div>
                            </a>                   
                        </div>
                        <!-- main item ends -->

                    </div>
                    <!-- first column ends -->

                    <!-- second column starts -->
                    <div class="col">

                        <!-- main item starts -->
                        <div class="main-item text-center">
                            <a href="{{ route('history') }}">
                                <div class="btn">
                                    Riwayat Test
                                </div>
                            </a>                   
                        </div>
                        <!-- main item ends -->
                    </div>
                    <!-- second column ends -->

                </div>

            </div>

        </div>
    </div>
</section>
@endsection