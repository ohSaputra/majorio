<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Majorio') }} - @yield('title')</title>

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="manifest.json">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Majorio">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Majorio">
    <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#2F3BA2">

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#2F3BA2">

    <!-- core css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body id="@yield('csscode')">
    <!-- Add your site or app content here -->

    <!-- header starts -->
    <header class="navbar-wrapper navbar-wrapper-responsive">

      <!-- navbar starts -->
      <nav class="navbar navbar-expand-lg navbar-light justify-content-between" role="navigation">

        <!-- nav-brands starts -->
        <h1 class="navbar-brand mx-auto"><a href="/"><img src="images/majorio_logo.png" alt=""></a></h1>
        <!-- nav-brands ends -->
        
          <!-- navbar-nav starts  -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">

                <!-- hamburger icon starts -->
                <!--<div class="hamburger-btn">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>-->
                <!-- hamburger icon ends -->

              </a>
            </li>
          </ul>
          <!-- navbar-nav ends -->

        </nav>
      <!-- navbar ends -->

    </header>
    <!-- header ends -->

    <!-- overlay starts -->
    <div class="overlay navigation">
        <div class="menus">
            <div>
                <ul class="">
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- overlay ends -->

    <div class="main-body">
        @yield('content')
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col text-center">Copyright @ 2017 Bakrie University</div>
        </div>
      </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- build:js scripts/main.min.js -->
    <script src="{{ asset('js/main.min.js') }}"></script>
    <!-- endbuild -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-XXXXX-X', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- endGoogle Analytic -->
  </body>
</html>
