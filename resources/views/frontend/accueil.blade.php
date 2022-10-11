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
                    <p>GUICHET DU FINANCEMENT DES JEUNES ENTREPRENEURS EN COTE D'IVOIRE</p>
                </div>
                <div>
                    <!-- TOUR PLACE 1 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                        <a class="course-overlay" href="{{ route('guichet1') }}">
                            <!-- IMAGE -->
                            <span style="padding-bottom: 200px;">
                                <h4>Mentorat solidaire (Business Angel)</h4>
                            </span>
                            <span style="padding-bottom: 100px;text-align: left;">
                                <h5 style="margin-left: 40px;">Accompagnement par un mentor</h5>
                                <h5 style="margin-left: 40px;">Coaching(leadership, compétences de vie, etc.)</h5>
                                <h5 style="margin-left: 40px;">Appui financier des mentors</h5>
                            </span>
                            <span style="padding-bottom: 5px;">
                               <h6>Voir plus...</h6>
                            </span>
                            <div class="v_place_img"> 
                                <img src="{{asset('frontend/images/t5.png')}}" alt="Mentorat solidaire (Business Angel)" title="Mentorat solidaire (Business Angel)" />
                            </div>
                            <!-- TOUR TITLE & ICONS -->
                            <div class="b_pack rows">
                                <!-- TOUR TITLE -->
                                <div class="col-md-12 col-sm-12">
                                    <h4><a href="{{route('guichet1')}}" target="_blank">Mentorat solidaire (Business Angel)<span class="v_pl_name"> </span></a></h4>
                                </div>
                                <!-- TOUR ICONS -->

                            </div>
                        </a>
                    </div>
                    <!-- TOUR PLACE 2 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.7s">
                        <a class="course-overlay" href="{{ route('guichet2') }}">

                            <span style="padding-bottom: 200px;">
                                <h4>Activité Génératrice de revenu(AGR)</h4>
                            </span>
                            <span style="padding-bottom: 100px;text-align: left;">
                                <h5 style="margin-left: 40px;">Accompagnement des projets de création</h5>
                                <h5 style="margin-left: 40px;">Accès à la formation</h5>
                                <h5 style="margin-left: 40px;">Accès au financement</h5>
                            </span>
                            <span style="padding-bottom: 5px;">
                               <h6>Voir plus...</h6>
                            </span>
                           
                            <!-- IMAGE -->
                            <div class="v_place_img"> <img src="{{asset('frontend/images/t1.png')}}" alt="Activité Génératrice de revenu" title="Activité Génératrice de revenu" /> </div>
                            <!-- TOUR TITLE & ICONS -->
                            <div class="b_pack rows">
                                <!-- TOUR TITLE -->
                                <div class="col-md-12 col-sm-12">
                                    <h4><a href="http://financement.projetsagir.com/" target="_blank">Activité Génératrice de revenu(AGR)<span class="v_pl_name"><!-- (England) --></span></a></h4>
                                </div>
                                <!-- TOUR ICONS -->

                            </div>
                        </a>
                    </div>
                    <!-- TOUR PLACE 3 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.9s">
                        <a class="course-overlay" href="{{route('guichet3')}}">

                            <span style="padding-bottom: 200px;">
                                <h4>Micro et petite Entreprise (MPE)</h4>
                            </span>
                            <span style="padding-bottom: 100px;text-align: left;">
                                <h5 style="margin-left: 30px;">Accompagnement des projets de création</h5>
                                <h5 style="margin-left: 30px;">Accès à la formation, au financement</h5>
                                <h5 style="margin-left: 30px;">Pilotage du processus par les Conseils Régionaux </h5>
                            </span>
                            <span style="padding-bottom: 5px;">
                               <h6>Voir plus...</h6>
                            </span>

                            <div class="v_place_img"><img src="{{asset('frontend/images/t2.png')}}" alt="Micro et petite Entreprise (MPE)" title="Micro et petite Entreprise (MPE)" /></div>
                            <div class="b_pack rows">
                                <div class="col-md-12 col-sm-12">
                                    <h4><a href="{{route('guichet3')}}" target="_blank">Micro et petite Entreprise (MPE)<span class="v_pl_name"><!-- (India) --></span></a></h4>
                                </div>

                            </div>
                        </a>
                    </div>
                    <!-- TOUR PLACE 4 -->
                    <div class="d-flex justify-content-center">
                        <div class="col-md-2 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.1s">
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.1s">
                            <a class="course-overlay" href="{{route('guichet4')}}" target="_blank">

                                <span style="padding-bottom: 200px;">
                                <h5>Moyenne Entreprise et Projets Structurants</h5>
                            </span>
                            <span style="padding-bottom: 100px;text-align: left;">
                                <h6 style="margin-left: 30px;">Accompagnement des projets</h6>
                                <h6 style="margin-left: 30px;">Développement d’entreprises formelles</h6>
                                <h6 style="margin-left: 30px;">Accès à la formation, au financement</h6>
                            </span>
                            <span style="padding-bottom: 5px;">
                               <h6>Voir plus...</h6>
                            </span>

                            <div class="v_place_img">
                                <img src="{{asset('frontend/images/t3.png')}}" alt="Moyenne Entreprise et Projets Structurant" title="Moyenne Entreprise et Projets Structurant" /> 
                            </div>
                            <div class="b_pack rows">
                                <div class="col-md-12 col-sm-12">
                                    <h4><a href="{{route('guichet4')}}" target="_blank">Moyenne Entreprise et Projets Structurant (MEPS)<span class="v_pl_name"><!-- (China) --></span></a></h4>
                                </div>

                            </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.3s">
                            <a class="course-overlay" href="{{route('guichet5')}}" target="_blank">
                            <div class="v_place_img"><img src="{{asset('frontend/images/t4.png')}}" alt="Capital d'investisement" title="Capital d'investisement" /> </div>
                            <span style="padding-bottom: 200px;">
                                <h4> Capital d'investisement (CI)</h4>
                            </span>
                            <span style="padding-bottom: 100px;text-align: left;">
                                <h5 style="margin-left: 30px;">Accompagnement des projets</h5>
                                <h5 style="margin-left: 30px;">Développement d’entreprises innovantes</h5>
                                <h5 style="margin-left: 30px;">Financement en capital</h5>
                            </span>
                            <span style="padding-bottom: 5px;">
                               <h6>Voir plus...</h6>
                            </span>
                            <a href="{{ route('guichet5') }}">
                                <div class="b_pack rows">
                                    <div class="col-md-12 col-sm-12">
                                        <h4>
                                            <a href="{{route('guichet5')}}" target="_blank">
                                                Capital d'investisement (CI)
                                                <span class="v_pl_name"><!-- (Andaman) -->
                                        </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-2 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.1s">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="spe-title">
                    <h2>Nos <span>Partenaires</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                   <div class="row">
                    <div class="col-sm-2"><img src="{{asset('frontend/images/partenaires/banquepoplaire.png')}}" alt="Banque populaire" style="width : 120px;height : 65px;" /></div>

                    <div class="col-sm-2"><img src="{{asset('frontend/images/partenaires/comocapital.png')}}" alt="Como Capital" style="width : 130px;height : 65px;" /></div>

                    <div class="col-sm-2"><img src="{{asset('frontend/images/partenaires/unacoopec.png')}}" alt="coopec" style="width : 90px;height : 90px;" /></div>

                    <div class="col-sm-2"><img src="{{asset('frontend/images/partenaires/societegenerale.png')}}" alt="Societe générale" style="width : 90px;height : 90px;" /></div>

                    <div class="col-sm-2"><img src="{{asset('frontend/images/partenaires/orangebank.png')}}" alt="Orabank" style="width : 80px;height : 80px;" /></div>

                    <div class="col-sm-2"><img src="{{asset('frontend/images/partenaires/filelle.png')}}" alt="fin'elle" style="width : 120px;height : 65px;" /></div>
                       
                   </div>
                </div>
    </section>
@endsection
