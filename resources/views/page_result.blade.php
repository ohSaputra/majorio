@extends('layouts.majorio')

@section('title', 'Halaman Utama')
@section('csscode', 'main-page')

@section('content')
<section>
<div class="container">
    <div class="row">
    <div class="col">
        <h3 class="text-center">Hasil:</h3>
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
            
            <a href="{{ route('home') }}" class="float-left">Kembali ke Halaman Utama</a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                class="float-right">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
        <!-- breadcrumb ends -->

        <div class="body-form text-center py-5">


        <p>Selamat kamu cocok sebagai <b>Mahasiswa {{ Session::get('name') }} !</b></p>

        <p class="small">Hasil yang lain bisa dilihat dibawah ini:</p>

        <div class="table-result">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Program Studi</th>
                        <th>Kecocokan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Session::get('rank') as $key => $rank)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $rank['name'] }}</td>
                            <td>{{ $rank['value'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>            
        </div>

        </div>

    </div>

    </div>
</div>
</section>
@endsection