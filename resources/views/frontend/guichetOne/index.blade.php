@extends('frontend.layout.main')
@section('content')
    <section>
        
        <!-- TOP SEARCH BOX -->
       <!--  <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                        <form class="tourz-search-form">
                            <div class="input-field">
                                <input type="text" id="select-city" class="autocomplete">
                                <label for="select-city">Enter city</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="select-search" class="autocomplete">
                                <label for="select-search" class="search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- END TOP SEARCH BOX -->
    </section>
    <!--END HEADER SECTION-->
        
    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>GUICHET 1 </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="#inner-page-title">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">guichet 1</a>
                    </li>
                </ul>
                <p>slogan du guichet 1</p>
            </div>
        </div>
    </section>
    <!--====== TOUR DETAILS - BOOKING ==========-->
    <section>
        <div class="rows banner_book" id="inner-page-title">
            <div class="container">
                <div class="banner_book_1">
                    <ul>
                        <li class="dl1">&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        <li class="dl2">&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        <li class="dl3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        <li class="dl4"><a href="booking.html">Devenir Mentor</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--====== TOUR DETAILS ==========-->
    <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space">
                <div class="col-md-9">
                    <!--====== TOUR TITLE ==========-->
                    <div class="tour_head">
                        <h2>Description Guichet 1</h2> </div>
                    <!--====== TOUR DESCRIPTION ==========-->
                    <div class="tour_head1">
                        <h3>Description</h3>
                        <p>Discover two of South America’s greatest cities, Rio de Janeiro and Buenos Aires, at a leisurely pace. A major highlight on this journey is a visit to Iguassu Falls in between your two city stays. It truly is one of the most spectacular sights on Earth. See the impressive falls from both the Brazilian and Argentine sides.</p>
                        <p>Brazil’s view takes you through clouds of mist and the opportunity to see these 275 falls, spanning nearly two miles! Argentina’s side allows you to walk along the boardwalk network and embark on a jungle train through the forest for unforgettable views. Hear the deafening roar and admire the brilliant rainbows created by the clouds of spray, and take in the majesty of this wonder of the world. From vibrant cities to scenic beauty, this vacation to Rio de Janeiro, Iguassu Falls, and Buenos Aires will leave you with vacation memories you’ll cherish for life.</p>
                    </div>
                    <!--====== ROOMS: HOTEL BOOKING ==========-->
                    <div class="tour_head1 hotel-book-room">
                        <h3>Photo Gallery</h3>
                        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators carousel-indicators-1">
                                <li data-target="#myCarousel1" data-slide-to="0"><img src="{{asset('frontend/images/gallery/t1.jpg')}}" alt="Chania">
                                </li>
                                <li data-target="#myCarousel1" data-slide-to="1"><img src="{{asset('frontend/images/gallery/t2.jpg')}}" alt="Chania">
                                </li>
                                <li data-target="#myCarousel1" data-slide-to="2"><img src="{{asset('frontend/images/gallery/t3.jpg')}}" alt="Chania">
                                </li>
                                <li data-target="#myCarousel1" data-slide-to="3"><img src="{{asset('frontend/images/gallery/t4.jpg')}}" alt="Chania">
                                </li>
                                <li data-target="#myCarousel1" data-slide-to="4"><img src="{{asset('frontend/images/gallery/t5.jpg')}}" alt="Chania">
                                </li>
                                <li data-target="#myCarousel1" data-slide-to="5"><img src="{{asset('frontend/images/gallery/s6.jpeg')}}" alt="Chania">
                                </li>
                                <li data-target="#myCarousel1" data-slide-to="6"><img src="{{asset('frontend/images/gallery/s7.jpeg')}}" alt="Chania">
                                </li>
                                <li data-target="#myCarousel1" data-slide-to="7"><img src="{{asset('frontend/images/gallery/s8.jpg')}}" alt="Chania">
                                </li>
                                <li data-target="#myCarousel1" data-slide-to="8"><img src="{{asset('frontend/images/gallery/s9.jpg')}}" alt="Chania">
                                </li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner carousel-inner1" role="listbox">
                                <div class="item active"> <img src="{{asset('frontend/images/gallery/t1.jpg')}}" alt="Chania" width="460" height="345"> </div>
                                <div class="item"> <img src="{{asset('frontend/images/gallery/t2.jpg')}}" alt="Chania" width="460" height="345"> </div>
                                <div class="item"> <img src="{{asset('frontend/images/gallery/t3.jpg')}}" alt="Chania" width="460" height="345"> </div>
                                <div class="item"> <img src="{{asset('frontend/images/gallery/t4.jpg')}}" alt="Chania" width="460" height="345"> </div>
                                <div class="item"> <img src="{{asset('frontend/images/gallery/t5.jpg')}}" alt="Chania" width="460" height="345"> </div>
                                <div class="item"> <img src="{{asset('frontend/images/gallery/t6.jpg')}}" alt="Chania" width="460" height="345"> </div>
                                <div class="item"> <img src="{{asset('frontend/images/gallery/t7.jpg')}}" alt="Chania" width="460" height="345"> </div>
                                <div class="item"> <img src="{{asset('frontend/images/gallery/t8.jpg')}}" alt="Chania" width="460" height="345"> </div>
                                <div class="item"> <img src="{{asset('frontend/images/gallery/t9.jpg')}}" alt="Chania" width="460" height="345"> </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
                            <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> </a>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="col-md-3 tour_r">
                    <!--====== SPECIAL OFFERS ==========-->
                    <div class="tour_right tour_offer">
                        <div class="band1"><img src="images/offer.png" alt="" /> </div>
                        <p>Special Offer</p>
                        <h4>$500<span class="n-td">
                                <span class="n-td-1">$800</span>
                                </span>
                            </h4> <a href="booking.html" class="link-btn">Book Now</a> </div>
                    <!--====== TRIP INFORMATION ==========-->
                    <div class="tour_right tour_incl tour-ri-com">
                        <h3>Trip Information</h3>
                        <ul>
                            <li>Location : Rio,Brazil</li>
                            <li>Arrival Date: Nov 12, 2017</li>
                            <li>Departure Date: Nov 21, 2017</li>
                            <li>Free Sightseeing & Hotel</li>
                        </ul>
                    </div>
                    <!--====== PACKAGE SHARE ==========-->
                    <div class="tour_right head_right tour_social tour-ri-com">
                        <h3>Share This Package</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                            <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                        </ul>
                    </div>
                    <!--====== HELP PACKAGE ==========-->
                    <div class="tour_right head_right tour_help tour-ri-com">
                        <h3>Help & Support</h3>
                        <div class="tour_help_1">
                            <h4 class="tour_help_1_call">Call Us Now</h4>
                            <h4><i class="fa fa-phone" aria-hidden="true"></i> 10-800-123-000</h4> </div>
                    </div>
                    <!--====== PACKAGE SHARE 2 ==========-->
                    <div class="tour_right head_right tour_social tour-ri-com">
                        <h3>Share This Package</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                            <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
@endsection
 