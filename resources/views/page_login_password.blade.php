@extends('layouts.majorio')

@section('title', 'Login')

@section('content')
<section>
    <div class="container">
    <div class="row">
        <div class="col">
        <h3 class="text-center">Selamat datang <span class="user">{{ $name }}</span></h3>
        </div>
    </div>
    </div>
</section>

<section>
    <div class="container">
    <div class="row">
        <div class="col">

            <form class="py-5 mx-auto form-login text-center" method="POST" action="{{ route('login') }}">

                {{ csrf_field() }}

                <!-- input email starts -->
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ $email }}" required>
                </div>
                <!-- input email ends -->

                <!-- input email starts -->
                <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Masukkan passwordmu disini" required>
                </div>
                <!-- input email ends -->

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>

        </div>
    </div>
    </div>
</section>
@endsection