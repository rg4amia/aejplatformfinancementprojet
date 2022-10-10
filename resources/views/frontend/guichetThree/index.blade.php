@extends('frontend.layout.main')
@section('content')
    <section>


    </section>
    <!--END HEADER SECTION-->

    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>Micro et Petite Entreprise (MPE) </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Micro et Petite Entreprise (MPE)</a>
                    </li>
                </ul>
                <p>Micro et Petite Entreprise (MPE)</p>
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
                        <h2>Micro et Petite Entreprise (MPE)</h2> </div>
                    <!--====== TOUR DESCRIPTION ==========-->
                    
                    <div class="tour_head1 l-info-pack-days days">
                        <h3>Description</h3>
                        <ul>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>1</span> Composantes</h4>
                                <p>- Accompagnement des projets de création ou de développement de petites entreprises formelles.</p>
                                <p>- Accès à la formation, au financement et au dispositif de suivi-encadrement.</p>
                                <p>- Pilotage du processus par les Conseils Régionaux à travers l’approche de la Maîtrise d’Ouvrage Délégué.</p>

                               
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>2</span> Cibles</h4>
                                <p>- Jeunes (18 à 40 ans) primo entrepreneurs ou déjà en activité</p>
                               
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>3</span> Besoins de financement</h4>
                                <p>- 1 000 001 F CFA à 5 000 000 F CFA</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>4</span> Conditions de financement</h4>
                                <p>- Type :  Crédit</p>
                                <p>- Duréede remboursement : 36 mois maximum</p>
                                <p>- Taux d’intérêt: à partir de 8% TAEG/an</p>
                                <p>- Apport personnel: 10% minimum</p>
                            </li>
                        </ul>
                        <br>
                        <a href="{{route('form.projetguichet3')}}"><button class="btn btn-info"> Soumettre un projet</button></a>
                    </div>
                </div>
                <div class="col-md-3 tour_r">

                     @include('frontend.layout.help_share')

                </div>
            </div>
        </div>
    </section>

@endsection
