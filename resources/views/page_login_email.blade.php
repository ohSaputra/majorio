@extends('layouts.majorio')

@section('title', 'Login')

@section('content')
<!-- greet start -->
<section>
    <div class="container">
    <div class="row">
        <div class="col">
        <h3 class="text-center">Selamat datang di Majorio!</h3>
        </div>
    </div>
    </div>
</section>
<!--greet ends -->

<!-- email login start -->
<section>
    <div class="container">
    <div class="row">
        <div class="col">

            <form class="py-5 mx-auto form-login text-center" method="POST" action="{{ route('connect.post') }}">

                {{ csrf_field() }}

                <!-- input email starts -->
                <div class="form-group">
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <!-- input email ends -->

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

        </div>
    </div>
    </div>
</section>
<!-- email login ends -->
@endsection