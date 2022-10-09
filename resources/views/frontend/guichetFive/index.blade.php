@extends('frontend.layout.main')
@section('content')
    <section>


    </section>
    <!--END HEADER SECTION-->

    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>Capital d’Investissement</span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Capital d’Investissement</a>
                    </li>
                </ul>
                <p>Capital d’Investissement</p>
            </div>
        </div>
    </section>

    <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space">
                <div class="col-md-9">
                    <!--====== TOUR TITLE ==========-->
                    <div class="tour_head">
                        <h2>Description Capital d’Investissement</h2> </div>
                    <!--====== TOUR DESCRIPTION ==========-->
                    <div class="tour_head1">
                        <h3>Description</h3>
                        <p>Accompagnement des projets développement d’entreprises formelles</p>
                        <p>Financement en capital, appui à la réflexion stratégique, appui à la structuration, appui à l’accès au marché, mise en réseau, etc.</p>

                        <br>
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
