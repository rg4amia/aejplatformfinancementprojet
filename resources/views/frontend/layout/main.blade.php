<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Travel - Tour Travel</title>
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

<!--HEADER SECTION-->
@include('frontend.layout.header-sub-menu')
<!--END HEADER SECTION-->

<section>
    <div class="rows pad-bot-redu tb-space">
        <div class="container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title">
                <h2>Nos <span>Guichets de financement</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>le guichet unique de financement de l'agence emploi jeunes</p>
            </div>
            <div>
                <!-- TOUR PLACE 1 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                    <!-- OFFER BRAND -->
                    <div class="band"> <img src="images/band.png" alt="" /> </div>
                    <!-- IMAGE -->
                    <div class="v_place_img"> <img src="images/t5.png" alt="Tour Booking" title="Tour Booking" /> </div>
                    <!-- TOUR TITLE & ICONS -->
                    <div class="b_pack rows">
                        <!-- TOUR TITLE -->
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="tour-details.html">Rio de Janeiro<span class="v_pl_name">(Brazil)</span></a></h4>
                        </div>
                        <!-- TOUR ICONS -->
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/info.png" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/price.png" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/map.png" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- TOUR PLACE 2 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.7s">
                    <!-- OFFER BRAND -->
                    <div class="band"> <img src="images/band1.png" alt="" /> </div>
                    <!-- IMAGE -->
                    <div class="v_place_img"> <img src="images/t1.png" alt="Tour Booking" title="Tour Booking" /> </div>
                    <!-- TOUR TITLE & ICONS -->
                    <div class="b_pack rows">
                        <!-- TOUR TITLE -->
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="tour-details.html">Paris<span class="v_pl_name">(England)</span></a></h4>
                        </div>
                        <!-- TOUR ICONS -->
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/info.png" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/price.png" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/map.png" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- TOUR PLACE 3 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.9s">
                    <div class="v_place_img"><img src="images/t2.png" alt="Tour Booking" title="Tour Booking" /> </div>
                    <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="tour-details.html">South India<span class="v_pl_name">(India)</span></a></h4>
                        </div>
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/info.png" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/price.png" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/map.png" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- TOUR PLACE 4 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.1s">
                    <div class="v_place_img"><img src="images/t3.png" alt="Tour Booking" title="Tour Booking" /> </div>
                    <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="tour-details.html">The Great Wall<span class="v_pl_name">(China)</span></a></h4>
                        </div>
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/info.png" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/price.png" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/map.png" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- TOUR PLACE 5 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.3s">
                    <div class="v_place_img"><img src="images/t4.png" alt="Tour Booking" title="Tour Booking" /> </div>
                    <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="tour-details.html">Nail Island<span class="v_pl_name">(Andaman)</span></a></h4>
                        </div>
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/info.png" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/price.png" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/map.png" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- TOUR PLACE 6 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.5s">
                    <div class="v_place_img"><img src="images/t6.png" alt="Tour Booking" title="Tour Booking" /> </div>
                    <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="tour-details.html">Mauritius<span class="v_pl_name">(Indiana)</span></a></h4>
                        </div>
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/info.png" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/price.png" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/map.png" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--====== FOOTER 2 ==========-->
<section>
    <div class="rows">
        <div class="footer">
            <div class="container">
                <div class="foot-sec2">
                    <div>
                        <div class="row">
                            <div class="col-sm-3 foot-spec foot-com">
                                <h4><span>Holiday</span> Tour & Travels</h4>
                                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                            </div>
                            <div class="col-sm-3 foot-spec foot-com">
                                <h4><span>Address</span> & Contact Info</h4>
                                <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
                                <p> <span class="strong">Phone: </span> <span class="highlighted">+101-1231-1231</span> </p>
                            </div>
                            <div class="col-sm-3 col-md-3 foot-spec foot-com">
                                <h4><span>SUPPORT</span> & HELP</h4>
                                <ul class="two-columns">
                                    <li> <a href="#">About Us</a> </li>
                                    <li> <a href="#">FAQ</a> </li>
                                    <li> <a href="#">Feedbacks</a> </li>
                                    <li> <a href="#">Blog </a> </li>
                                    <li> <a href="#">Use Cases</a> </li>
                                    <li> <a href="#">Advertise us</a> </li>
                                    <li> <a href="#">Discount</a> </li>
                                    <li> <a href="#">Vacations</a> </li>
                                    <li> <a href="#">Branding Offers </a> </li>
                                    <li> <a href="#">Contact Us</a> </li>
                                </ul>
                            </div>
                            <div class="col-sm-3 foot-social foot-spec foot-com">
                                <h4><span>Follow</span> with us</h4>
                                <p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== FOOTER - COPYRIGHT ==========-->
<section>
    <div class="rows copy">
        <div class="container">
            <p>Copyrights © 2018 Company Name. All Rights Reserved</p>
        </div>
    </div>
</section>
<section>
    <div class="icon-float">
        <ul>
            <li><a href="#" class="sh">1k <br> Share</a> </li>
            <li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
            <li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
        </ul>
    </div>
</section>
@include('frontend.layout.scripts')
</body>

</html>
