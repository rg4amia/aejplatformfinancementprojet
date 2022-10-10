@extends('frontend.layout.main')
@section('content')
    <section>


    </section>
    <!--END HEADER SECTION-->

    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>Capital d’Investissement (CI)</span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Capital d’Investissement (CI)</a>
                    </li>
                </ul>
                <p>Capital d’Investissement (CI)</p>
            </div>
        </div>
    </section>

    <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space">
                <div class="col-md-9">
                    <!--====== TOUR TITLE ==========-->
                    <div class="tour_head">
                        <h2>Capital d’Investissement (CI)</h2> </div>
                    <!--====== TOUR DESCRIPTION ==========-->
                    <div class="tour_head1 l-info-pack-days days">
                        <h3>Description</h3>
                        <ul>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Composantes</h4>
                                <p>- accompagnement des projets développement d’entreprises innovantes et à fort potentiel de création de valeur et d’emplois.</p>

                                <p>- financement en capital, appui à la réflexion stratégique, appui à la structuration, appui à l’accès au marché, mise en réseau, etc.</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Cibles</h4>
                                <p>- Jeunes (18 à 40 ans) déjà en activité (3 années d’existence minimum ).</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Besoins de financement</h4>
                                <p>- 25 000 000 F CFA à 100 000 000 F CFA</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Conditions de financement</h4>
                                <p>- Type : capital</p>
                                <p>- Prise de participation minoritaire</p>
                                <p>- Maturité de 60 mois en moyenne</p>
                                <p>- Conditions de sortie de capital négociées</p>
                            </li>
                        </ul>
                        <br>
                         <a href="{{route('form.projetguichet5')}}"><button class="btn btn-info"> Soumettre un projet</button></a>  
                    </div>
                </div>
                <div class="col-md-3 tour_r">

                     @include('frontend.layout.help_share')

                </div>
            </div>
        </div>
    </section>

@endsection
