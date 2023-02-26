<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <Title>{{ Str::title($setting->tittleWeb)}} | @yield('title', '')</Title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="@yield('desc', "{{ $setting->descWeb}}")">
    <meta name="keywords" content="Cagar budaya, kebudayaan, Kesenian, Dinas, Gis, sistem Informasi Geografis">
    <meta name="author" content="Zeroone Teknologi ">

    <!-- Favicon icon -->
    <link rel="icon" href="{{ $setting->logo }}" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>
<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="{{ asset($setting->logo)}}" alt="{{ $setting->tittleWeb}}" style="height: 50px; width: auto">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html" class="{{ Request::is('home*') ? 'active': ''}}">Home</a></li>
                            <li><a href="about.html" class="{{ Request::is('about*') ? 'active': ''}}">About</a></li>
                            <li><a href="deals.html" class="{{ Request::is('detail*') ? 'active': ''}}">Deals</a></li>
                            <li><a href="reservation.html" class="{{ Request::is('reservation*') ? 'active': ''}}">Reservation</a></li>
                            <li><a href="reservation.html" class="{{ Request::is('book*') ? 'active': ''}}">Book Yours</a></li>
                        </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    
    <!-- ***** Content Area Start ***** -->
    @yield('content')
    <!-- ***** Content Area End ***** -->

    <div class="call-to-action">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                <h2>Are You Looking To Travel ?</h2>
                <h4>Make A Reservation By Clicking The Button</h4>
            </div>
            <div class="col-lg-4">
                <div class="border-button">
                <a href="reservation.html">Book Yours Now</a>
                </div>
            </div>
            </div>
        </div>
    </div> 
    <footer>
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <p>Copyright © 2036 <a href="#">WoOx Travel</a> Company. All rights reserved. 
            <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a> Distribution: <a href="https://themewagon.com target="_blank" >ThemeWagon</a></p>
        </div>
        </div>
    </div>
    </footer>  
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>   
    <script src="/assets/js/isotope.min.js"></script>
    <script src="/assets/js/owl-carousel.js"></script>
    <script src="/assets/js/wow.js"></script>
    <script src="/assets/js/tabs.js"></script>
    <script src="/assets/js/popup.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script>
    function bannerSwitcher() {
        next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
        if (next.length) next.prop('checked', true);
        else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
        clearInterval(bannerTimer);
        bannerTimer = setInterval(bannerSwitcher, 5000)
    });
    </script>  
    </body>
    
</html>