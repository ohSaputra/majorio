@extends('layouts.majorio')

@section('title', 'Registrasi')
@section('csscode', 'main-page')

@section('content')
<section>
    <div class="container">
    <div class="row">
        <div class="col">
        <h3 class="text-center">Sepertinya, kamu baru</h3>
        </div>
    </div>
    </div>
</section>

<section>
    <div class="container">
    <div class="row">
        <div class="col">

            <form class="py-5 mx-auto form-login text-center" method="POST" action="{{ route('register') }}">
                
                <h6>Lengkapi data dibawah ini</h6>

                {{ csrf_field() }}

                <!-- input name starts -->
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama kamu" required autofocus>
                </div>
                <!-- input name ends -->

                <!-- input email starts -->
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email kamu" required>
                </div>
                <!-- input email ends -->

                <!-- input school starts -->
                <div class="form-group">
                    <input type="text" name="institution" class="form-control" id="institution" placeholder="Sekolah/Intitusi asal" required>
                </div>
                <!-- input school ends -->

                <!-- input password starts -->
                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Login password" required>
                </div>
                <!-- input password ends -->

                <!-- input password starts -->
                <div class="form-group">
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirm" placeholder="Masukkan kembali Login password" required>
                </div>
                <!-- input password ends -->

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

        </div>
    </div>
    </div>
</section>
@endsection