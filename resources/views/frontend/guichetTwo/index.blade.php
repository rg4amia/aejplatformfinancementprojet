@extends('frontend.layout.main')
@section('content')
    <section>


    </section>
    <!--END HEADER SECTION-->

    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>Activité Génératrice de Revenus (AGR) </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Activité Génératrice de Revenus (AGR)</a>
                    </li>
                </ul>
                <p>Activité Génératrice de Revenus (AGR)</p>
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
                        <h2>Activité Génératrice de Revenus (AGR)</h2> </div>
                    <!--====== TOUR DESCRIPTION ==========-->
                    
                    <div class="tour_head1 l-info-pack-days days">
                        <h3>Description</h3>
                        <ul>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Composantes</h4>
                                <p>- Accompagnement des projets de création ou de développement de petites activités</p>

                                <p>- Accès à la formation, au financement et au dispositif de suivi-encadrement</p>

                               
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Cibles</h4>
                                <p>- AGR Classique et AVEC : Jeunes (18 à 40 ans) primo entrepreneurs ou déjà en activité .</p>
                                <p>- AGR Plus : Jeunes (18 à 40 ans) bénéficiaire de l’opération Agir ayant correctement remboursés les prêts.</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Besoins de financement</h4>
                                <p>- AGR Classique : 100 000 F CFA à 1 000 000 F CFA</p>
                                <p>- AVEC: 100 000 F CFA à 300 000 F CFA</p>
                                <p>- AGR Plus : 50 000 F CFA à 300 000 F CFA avec possibilité de revolving quasi illimité</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Conditions de financement</h4>
                                <p>- Type : Crédit; Durée: 3 à 24 mois maximum.</p>
                                <p>- Taux d’intérêt: à partir de 8% TAEG/an.</p>
                                <p>- Apport personnel: 10% minimum.</p>
                            </li>
                        </ul>
                        <br>
                        <a href="{{url('http://financement.projetsagir.com')}}" target="_blank"><button class="btn btn-info"> Projet AGIR</button></a>
                    </div>
                </div>
                <div class="col-md-3 tour_r">

                    @include('frontend.layout.help_share')

                </div>
            </div>
        </div>
    </section>

@endsection
