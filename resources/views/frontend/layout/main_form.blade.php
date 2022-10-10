<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accueil - Guichet de financement</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="images/fav.ico">
    <!-- GOOGLE FONTS -->

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/mob.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @yield('css')

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<!-- MOBILE MENU -->
@include('frontend.layout.menu_mobile')
<!--HEADER SECTION-->
<section>
    <!-- TOP BAR -->
@include('frontend.layout.top-bar')

<!-- LOGO AND MENU SECTION -->

    @include('frontend.layout.menu')
</section>
<!--END HEADER SECTION-->


@yield('content')

{{-- footer --}}
@include('frontend.layout.footer')

<script src="{{ asset('frontend/js/jquery-latest.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@yield('js')
</body>
</html>
