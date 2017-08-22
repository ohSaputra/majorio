@extends('layouts.majorio')

@section('title', 'Halaman Utama')
@section('csscode', 'main-page')

@section('content')
<section>
<div class="container">
    <div class="row">
    <div class="col">
        <h3 class="text-center">Coba isi pertanyaan dibawah ini</h3>
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

        <form action="{{ route('count') }}" method="POST">
            {{ csrf_field() }}

            <!-- question starts -->
            <div class="question-item pb-5">
                <p>Berapa rata rata nilai <b>Bahasa Indonesia</b>-mu?</p>
                <div class="btn-group pb-2" data-toggle="buttons">
                <label class="btn btn-secondary">
                    <input type="radio" name="options1" id="option1-1" autocomplete="off" value="9"> A
                </label>
                    <label class="btn btn-secondary">
                <input type="radio" name="options1" id="option1-2" autocomplete="off" value="8"> A-
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options1" id="option1-3" autocomplete="off" value="7"> B+
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options1" id="option1-4" autocomplete="off" value="6"> B
                </label>
                    <label class="btn btn-secondary active">
                <input type="radio" name="options1" id="option1-5" autocomplete="off" value="5" checked> B-
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options1" id="option1-6" autocomplete="off" value="4"> C+
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options1" id="option1-7" autocomplete="off" value="3"> C
                </label>
                    <label class="btn btn-secondary">
                <input type="radio" name="options1" id="option1-8" autocomplete="off" value="2"> D
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options1" id="option1-9" autocomplete="off" value="1"> E
                </label>
                </div>
            </div>
            <!-- question ends -->

            <!-- question starts -->
            <div class="question-item pb-5">
                <p>Berapa rata rata nilai <b>Matematika</b>-mu?</p>
                <div class="btn-group pb-2" data-toggle="buttons">
                    <label class="btn btn-secondary">
                    <input type="radio" name="options2" id="option2-1" autocomplete="off" value="9"> A
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options2" id="option2-2" autocomplete="off" value="8"> A-
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options2" id="option2-3" autocomplete="off" value="7"> B+
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options2" id="option2-4" autocomplete="off" value="6"> B
                    </label>
                    <label class="btn btn-secondary active">
                    <input type="radio" name="options2" id="option2-5" autocomplete="off" value="5" checked> B-
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options2" id="option2-6" autocomplete="off" value="4"> C+
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options2" id="option2-7" autocomplete="off" value="3"> C
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options2" id="option2-8" autocomplete="off" value="2"> D
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options2" id="option2-9" autocomplete="off" value="1"> E
                    </label>
                </div>
            </div>
            <!-- question ends -->

            <!-- question starts -->
            <div class="question-item pb-5">
                <p>Berapa rata rata nilai <b>IPA</b>-mu?</p>
                <div class="btn-group pb-2" data-toggle="buttons">
                    <label class="btn btn-secondary">
                    <input type="radio" name="options3" id="option3-1" autocomplete="off" value="9"> A
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options3" id="option3-2" autocomplete="off" value="8"> A-
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options3" id="option3-3" autocomplete="off" value="7"> B+
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options3" id="option3-4" autocomplete="off" value="6"> B
                    </label>
                    <label class="btn btn-secondary active">
                    <input type="radio" name="options3" id="option3-5" autocomplete="off" value="5" checked> B-
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options3" id="option3-6" autocomplete="off" value="4"> C+
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options3" id="option3-7" autocomplete="off" value="3"> C
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options3" id="option3-8" autocomplete="off" value="2"> D
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options3" id="option3-9" autocomplete="off" value="1"> E
                    </label>
                </div>
            </div>
            <!-- question ends -->

            <!-- question starts -->
            <div class="question-item pb-5">
                <p>Berapa rata rata nilai <b>IPS</b>-mu?</p>
                <div class="btn-group pb-2" data-toggle="buttons">
                    <label class="btn btn-secondary">
                    <input type="radio" name="options4" id="option4-1" autocomplete="off" value="9"> A
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options4" id="option4-2" autocomplete="off" value="8"> A-
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options4" id="option4-3" autocomplete="off" value="7"> B+
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options4" id="option4-4" autocomplete="off" value="6"> B
                    </label>
                    <label class="btn btn-secondary active">
                    <input type="radio" name="options4" id="option4-5" autocomplete="off" value="5" checked> B-
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options4" id="option4-6" autocomplete="off" value="4"> C+
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options4" id="option4-7" autocomplete="off" value="3"> C
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options4" id="option4-8" autocomplete="off" value="2"> D
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options4" id="option4-9" autocomplete="off" value="1"> E
                    </label>
                </div>
            </div>
            <!-- question ends -->

            <!-- question starts -->
            <div class="question-item pb-5">
                <p>Berapa rata rata nilai <b>English</b>-mu?</p>
                <div class="btn-group pb-2" data-toggle="buttons">
                    <label class="btn btn-secondary">
                    <input type="radio" name="options5" id="option5-1" autocomplete="off" value="9"> A
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options5" id="option5-2" autocomplete="off" value="8"> A-
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options5" id="option5-3" autocomplete="off" value="7"> B+
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options5" id="option5-4" autocomplete="off" value="69"> B
                    </label>
                    <label class="btn btn-secondary active">
                    <input type="radio" name="options5" id="option5-5" autocomplete="off" value="5" checked> B-
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options5" id="option5-6" autocomplete="off" value="4"> C+
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options5" id="option5-7" autocomplete="off" value="3"> C
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options5" id="option5-8" autocomplete="off" value="2"> D
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options5" id="option5-9" autocomplete="off" value="1"> E
                    </label>
                </div>
            </div>
            <!-- question ends -->

            <!-- question starts -->
            <div class="question-item pb-5">
                <p>Kamu dengan mudah mengekspresikan sesuatu dengan <b>Ucapan dan Tulisan</b>.</p>
                <div class="btn-group pb-2" data-toggle="buttons">
                    <label class="btn btn-secondary">
                    <input type="radio" name="options6" id="option6-1" autocomplete="off" value="9"> Sangat Setuju
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options6" id="option6-2" autocomplete="off" value="7"> Setuju
                    </label>
                    <label class="btn btn-secondary active">
                    <input type="radio" name="options6" id="option6-3" autocomplete="off" value="5" checked> Netral
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options6" id="option6-4" autocomplete="off" value="3"> Tidak Setuju
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options6" id="option6-5" autocomplete="off" value="1"> Sangat Tidak Setuju
                    </label>
                </div>
            </div>
            <!-- question ends -->

            <!-- question starts -->
            <div class="question-item pb-5">
                <p>Kamu dengan mudah menggambar dan menjelaskan <b>figur-figur dalam ruang</b>.</p>
                <div class="btn-group pb-2" data-toggle="buttons">
                    <label class="btn btn-secondary">
                    <input type="radio" name="options7" id="option7-1" autocomplete="off" value="9"> Sangat Setuju
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options7" id="option7-2" autocomplete="off" value="7"> Setuju
                    </label>
                    <label class="btn btn-secondary active">
                    <input type="radio" name="options7" id="option7-3" autocomplete="off" value="5" checked> Netral
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options7" id="option7-4" autocomplete="off" value="3"> Tidak Setuju
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options7" id="option7-5" autocomplete="off" value="1"> Sangat Tidak Setuju
                    </label>
                </div>
            </div>
            <!-- question ends -->

            <!-- question starts -->
            <div class="question-item pb-5">
                <p>Kamu dengan mudah memecahkan <b>suatu masalah dan memahami sesuatu</b>.</p>
                <div class="btn-group pb-2" data-toggle="buttons">
                    <label class="btn btn-secondary">
                    <input type="radio" name="options8" id="option8-1" autocomplete="off" value="9"> Sangat Setuju
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options8" id="option8-2" autocomplete="off" value="7"> Setuju
                    </label>
                    <label class="btn btn-secondary active">
                    <input type="radio" name="options8" id="option8-3" autocomplete="off" value="5" checked> Netral
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options8" id="option8-4" autocomplete="off" value="3"> Tidak Setuju
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options8" id="option8-5" autocomplete="off" value="1"> Sangat Tidak Setuju
                    </label>
                </div>
            </div>
            <!-- question ends -->

            <!-- question starts -->
            <div class="question-item pb-5">
                <p>Kamu dengan mudah mengetahui <b>apa yang dipikirkan orang lain</b>, Kamu dengan mudah mengetahui mood seseorang dalam berbicara.</p>
                <div class="btn-group pb-2" data-toggle="buttons">
                    <label class="btn btn-secondary">
                    <input type="radio" name="options9" id="option9-1" autocomplete="off" value="9"> Sangat Setuju
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options9" id="option9-2" autocomplete="off" value="7"> Setuju
                    </label>
                    <label class="btn btn-secondary active">
                    <input type="radio" name="options9" id="option9-3" autocomplete="off" value="5" checked> Netral
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options9" id="option9-4" autocomplete="off" value="3"> Tidak Setuju
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options9" id="option9-5" autocomplete="off" value="1"> Sangat Tidak Setuju
                    </label>
                </div>
            </div>
            <!-- question ends -->

            <!-- question starts -->
            <div class="question-item pb-5">
                <p>Kamu dengan mudah mengetahui <b>apa yang sedang kamu rasakan</b> dan mengerti bagaimana meresponnya.</p>
                <div class="btn-group pb-2" data-toggle="buttons">
                    <label class="btn btn-secondary">
                    <input type="radio" name="options10" id="option10-1" autocomplete="off" value="9"> Sangat Setuju
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options10" id="option10-2" autocomplete="off" value="7"> Setuju
                    </label>
                    <label class="btn btn-secondary active">
                    <input type="radio" name="options10" id="option10-3" autocomplete="off" value="5" checked> Netral
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options10" id="option10-4" autocomplete="off" value="3"> Tidak Setuju
                    </label>
                    <label class="btn btn-secondary">
                    <input type="radio" name="options10" id="option10-5" autocomplete="off" value="1"> Sangat Tidak Setuju
                    </label>
                </div>
            </div>
            <!-- question ends -->

            <button class="btn" type="submit">Kirim</button>

        </form>

        </div>

    </div>

    </div>
</div>
</section>
@endsection