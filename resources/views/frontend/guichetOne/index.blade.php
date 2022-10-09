@extends('frontend.layout.main')
@section('content')
    <section>

    </section>
    <!--END HEADER SECTION-->

    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>Business Angel </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Business Angel</a>
                    </li>
                </ul>
                <p>Business Angel</p>
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
                        <li class="dl4"><a href="{{route('mentor.form')}}">Devenir Mentor</a> </li>
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
                        <h2>Description Business Angel</h2> </div>
                    <!--====== TOUR DESCRIPTION ==========-->
                    <div class="tour_head1">
                        <h3>Description</h3>
                        <p>Accompagnement par des mentors - investisseurs des projet de création ou de développement de petites entreprises formelles</p>
                        <p>Coaching (leadership, compétences de vie, etc.), appui à la structuration, appui à l’accès au marché, mise en réseau, etc.</p>

                        <br>
                        <br>
                        <a href="{{route('form.projetguichet1')}}"><button class="btn btn-info"> Soumettre un projet</button></a>
                    </div>
                </div>
                <div class="col-md-3 tour_r">

                    @include('frontend.layout.help_share')

                </div>
            </div>
        </div>
    </section>

@endsection
