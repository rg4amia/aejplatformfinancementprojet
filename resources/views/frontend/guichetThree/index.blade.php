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
                        <h2>Description Micro et Petite Entreprise (MPE)</h2> </div>
                    <!--====== TOUR DESCRIPTION ==========-->
                    <div class="tour_head1">
                        <h3>Description</h3>
                        <p>Accompagnement des projets de création ou de développement de petites entreprises formelles</p>
                        <p>Accès à la formation, au financement et au dispositif de suivi-encadrement</p>
                        <p>Pilotage du processus par les Conseils Régionaux à travers l’approche de la Maîtrise d’Ouvrage Délégué</p>

                        <br>
                        <br>
                        @auth
                            @role('promoteur')
                                <a class="btn btn-info" href="{{route('form.projetguichet3')}}">Soumettre un projet</a>
                            @endrole
                        @else
                            <div class="alert alert-success">
                                Veuillez vous <a href="{{ route('user.index') }}">connecter</a> pour avoir accès à ce service.
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
