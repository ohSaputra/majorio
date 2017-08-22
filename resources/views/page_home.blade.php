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
            <p>Here he comes Here comes Speed Racer. He's a demon on wheels. Come and play. Everything's A-OK.</p>
            <a href="{{ route('connect.get') }}" class="btn btn-primary">Take Test</a>
        </div>

        </div>

    </div>
    </div>
    <!-- container ends -->

</section>

<section></section>
@endsection
