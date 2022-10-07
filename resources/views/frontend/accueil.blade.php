@extends('frontend.layout.main')
@section('content')
@include('frontend.layout.header-sub-menu')
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
                    <a href="{{ route('guichet1') }}">
                    <!-- OFFER BRAND -->
                    <div class="band"> <img src="{{asset('frontend/mages/band.png')}}" alt="" /> </div>
                    <!-- IMAGE -->

                    <div class="v_place_img"> <img src="{{asset('frontend/images/t5.png')}}" alt="Tour Booking" title="Tour Booking" /> </div>
                    <!-- TOUR TITLE & ICONS -->
                    <div class="b_pack rows">
                        <!-- TOUR TITLE -->
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="{{route('guichet1')}}">GUICHET 1<span class="v_pl_name"><!-- (Brazil) --></span></a></h4>

                    <div class="v_place_img"> <img src="{{ asset('frontend/images/guichet/guichet1.jpeg') }}" alt="Tour Booking" title="GUICHET 1" /> </div>
                    <!-- TOUR TITLE & ICONS -->
                    <div class="b_pack rows">
                        <!-- TOUR TITLE -->
                        <div class="col-md-12 col-sm-12">
                            <h4><a href="{{ route('guichet1') }}">GUICHET 1: Business Angel<span class="v_pl_name"><!-- (Brazil) --></span></a></h4>

                        </div>
                        <!-- TOUR ICONS -->

                    </div>
                    </a>
                </div>
                <!-- TOUR PLACE 2 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.7s">
                    <a href="{{ route('guichet2') }}">
                    <!-- OFFER BRAND -->
                   <!--  <div class="band"> <img src="{{asset('frontend/images/band1.png')}}" alt="" /> </div> -->
                    <!-- IMAGE -->

                    <div class="v_place_img"> <img src="{{asset('frontend/images/t1.png')}}" alt="Tour Booking" title="Tour Booking" /> </div>
                    <!-- TOUR TITLE & ICONS -->
                    <div class="b_pack rows">
                        <!-- TOUR TITLE -->
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="{{route('guichet2')}}">GUICHET 2<span class="v_pl_name"><!-- (England) --></span></a></h4>

                    <div class="v_place_img"> <img src="{{ asset('frontend/images/guichet/guichet2.jpeg') }}" alt="Tour Booking" title="GUICHET 2" /> </div>
                    <!-- TOUR TITLE & ICONS -->
                    <div class="b_pack rows">
                        <!-- TOUR TITLE -->
                        <div class="col-md-12 col-sm-12">
                            <h4><a href="{{ route('guichet2') }}">GUICHET 2: Activité Génératrice de revenu(AGR)<span class="v_pl_name"><!-- (England) --></span></a></h4>

                        </div>
                        <!-- TOUR ICONS -->

                    </div>
                    </a>
                </div>
                <!-- TOUR PLACE 3 -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.9s">

                    <div class="v_place_img"><img src="{{asset('frontend/images/t2.png')}}" alt="Tour Booking" title="Tour Booking" /> </div>
                    <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="{{route('guichet3')}}">GUICHET 3<span class="v_pl_name"><!-- (India) --></span></a></h4>

                    <a href="{{ route('guichet3') }}">
                    <div class="v_place_img"><img src="{{asset('frontend/images/guichet/guichet3.jpeg')}}" alt="Tour Booking" title="GUICHET 3" /> </div>
                    <div class="b_pack rows">
                        <div class="col-md-12 col-sm-12">
                            <h4><a href="{{ route('guichet3') }}">GUICHET 3: Micro et petite Entreprise (MPE)<span class="v_pl_name"><!-- (India) --></span></a></h4>

                        </div>

                    </div>
                    </a>
                </div>
                <!-- TOUR PLACE 4 -->
                <div class="d-flex justify-content-center">
                    <div class="col-md-2 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.1s">
                        <a href="{{ route('guichet4') }}">
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.1s">

                    <div class="v_place_img"><img src="{{asset('frontend/images/t3.png')}}" alt="Tour Booking" title="Tour Booking" /> </div>

                    <div class="v_place_img"><img src="{{ asset('frontend/images/guichet/guichet4.jpeg') }}" alt="Tour Booking" title="GUICHET 4" /> </div>

                    <div class="b_pack rows">
                        <div class="col-md-12 col-sm-12">
                            <h4><a href="{{route('guichet4')}}">GUICHET 4: Moyenne Entreprise et Projets Structurant<span class="v_pl_name"><!-- (China) --></span></a></h4>
                        </div>

                    </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.3s">

                    <div class="v_place_img"><img src="{{asset('frontend/images/t4.png')}}" alt="Tour Booking" title="Tour Booking" /> </div>

                    <a href="{{ route('guichet5') }}">
                    <div class="v_place_img"><img src="{{ asset('frontend/images/guichet/guichet5.jpeg') }}" alt="Tour Booking" title="GUICHET 5" /> </div>

                    <div class="b_pack rows">
                        <div class="col-md-12 col-sm-12">
                            <h4><a href="{{route('guichet5')}}">GUICHET 5: Capital d'investisement<span class="v_pl_name"><!-- (Andaman) --></span></a></h4>
                        </div>

                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.1s">
                    </div>
                    </a>

                </div>

                <!-- TOUR PLACE 5 -->

                <!-- TOUR PLACE 6 -->
                <!-- <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.5s">
                    <div class="v_place_img"><img src="{{asset('frontend/images/t6.png')}}" alt="Tour Booking" title="Tour Booking" /> </div>
                    <div class="b_pack rows">
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="tour-details.html">GUICHET 6<span class="v_pl_name"></span></a></h4>
                        </div>
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="{{asset('frontend/images/clock.png')}}" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('frontend/images/info.png')}}" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('frontend/images/price.png')}}" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('frontend/images/map.png')}}" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
@endsection
