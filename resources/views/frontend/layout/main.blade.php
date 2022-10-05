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
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">

    @include('frontend.layout.style')

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
<<<<<<< HEAD
=======
=======
<!--HEADER SECTION-->

<!--END HEADER SECTION-->
>>>>>>> e7ce646e400321ff4380a3d48b12cf8a134d6f44

@yield('content')

{{-- footer --}}
@include('frontend.layout.footer')

@include('frontend.layout.scripts')
</body>
</html>
