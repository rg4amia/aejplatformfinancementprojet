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
                <h2><span>GUICHET 5 </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">guichet 5</a>
                    </li>
                </ul>
                <p>slogan du guichet 5</p>
            </div>
        </div>
    </section>
    <!--====== TOUR DETAILS - BOOKING ==========-->
    <!-- <section>
        <div class="rows banner_book" id="inner-page-title">
            <div class="container">
                <div class="banner_book_1">
                    <ul>
                        <li class="dl1">&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        <li class="dl2">&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        <li class="dl3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        <li class="dl4"><a href="{{route('mentor.form')}}">Devenir Mentor</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
    <!--====== TOUR DETAILS ==========-->
    <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space">
                <div class="col-md-9">
                    <!--====== TOUR TITLE ==========-->
                    <div class="tour_head">
                        <h2>Description Guichet 5</h2> </div>
                    <!--====== TOUR DESCRIPTION ==========-->
                    <div class="tour_head1">
                        <h3>Description</h3>
                        <p>Discover two of South America’s greatest cities, Rio de Janeiro and Buenos Aires, at a leisurely pace. A major highlight on this journey is a visit to Iguassu Falls in between your two city stays. It truly is one of the most spectacular sights on Earth. See the impressive falls from both the Brazilian and Argentine sides.</p>
                        <p>Brazil’s view takes you through clouds of mist and the opportunity to see these 275 falls, spanning nearly two miles! Argentina’s side allows you to walk along the boardwalk network and embark on a jungle train through the forest for unforgettable views. Hear the deafening roar and admire the brilliant rainbows created by the clouds of spray, and take in the majesty of this wonder of the world. From vibrant cities to scenic beauty, this vacation to Rio de Janeiro, Iguassu Falls, and Buenos Aires will leave you with vacation memories you’ll cherish for life.</p>

                        <br>
                        <br>
                        <a href="{{route('form.projetguichet3')}}"><button class="btn btn-info"> Soumettre un projet</button></a>
                    </div>
                </div>
                <div class="col-md-3 tour_r">
                    <!--====== SPECIAL OFFERS ==========-->
                    <!-- <div class="tour_right tour_offer">
                        <div class="band1"><img src="images/offer.png" alt="" /> </div>
                        <p>Special Offer</p>
                        <h4>$500<span class="n-td">
                                <span class="n-td-1">$800</span>
                                </span>
                            </h4> <a href="booking.html" class="link-btn">Book Now</a>
                        </div> -->

                    <!--====== PACKAGE SHARE ==========-->
                    <!-- <div class="tour_right head_right tour_social tour-ri-com">
                        <h3>Share This Package</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                            <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                        </ul>
                    </div> -->
                    <!--====== HELP PACKAGE ==========-->
                    <div class="tour_right head_right tour_help tour-ri-com">
                        <h3>Aide & support</h3>
                        <div class="tour_help_1">
                            <h4 class="tour_help_1_call">Applez-nous</h4>
                            <h4><i class="fa fa-phone" aria-hidden="true"></i> (+225) 00 00 00 00 00</h4> </div>
                    </div>
                    <!--====== PACKAGE SHARE 2 ==========-->
                    <div class="tour_right head_right tour_social tour-ri-com">
                        <h3>Suivez-nous</h3>
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
