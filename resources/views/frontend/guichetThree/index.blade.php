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
                                <h4> Composantes</h4>
                                <p>- Accompagnement des projets de cr??ation ou de d??veloppement de petites entreprises formelles.</p>
                                <p>- Acc??s ?? la formation, au financement et au dispositif de suivi-encadrement.</p>
                                <p>- Pilotage du processus par les Conseils R??gionaux ?? travers l???approche de la Ma??trise d???Ouvrage D??l??gu??.</p>

                               
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Cibles</h4>
                                <p>- Jeunes (18 ?? 40 ans) primo entrepreneurs ou d??j?? en activit??</p>
                               
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Besoins de financement</h4>
                                <p>- 1 000 001 F CFA ?? 5 000 000 F CFA</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Conditions de financement</h4>
                                <p>- Type :  Cr??dit</p>
                                <p>- Dur??ede remboursement : 36 mois maximum</p>
                                <p>- Taux d???int??r??t: ?? partir de 8% TAEG/an</p>
                                <p>- Apport personnel: 10% minimum</p>
                            </li>
                        </ul>
                        <br>
                        @auth
                            @role('promoteur')
                                <a class="btn btn-info" href="{{route('form.projetguichet3')}}">Soumettre un projet</a>
                            @endrole
                        @else
                            <div class="alert alert-success">
                                Veuillez vous <a href="{{ route('user.index') }}">connecter</a> pour avoir acc??s ?? ce service.
                            </div>
                        @endauth
                    </div>
                </div>
                <div class="col-md-3 tour_r">
                     @include('frontend.layout.help_share')

                </div>
            </div>
        </div>
    </section>

@endsection
