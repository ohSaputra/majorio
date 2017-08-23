@extends('layouts.majorio')

@section('title', 'Riwayat')
@section('csscode', 'main-page')

@section('content')
<section>
<div class="container">
    <div class="row">
    <div class="col">
        <h3 class="text-center">Riwayat Pengujian</h3>
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

        <p class="small">Berikut hasil yang pernah kamu peroleh:</p>

        <div class="table-result">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Hasil</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $key => $result)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $result['created'] }}</td>
                        <td><b>{{ $result['best'] }}</b></td>
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