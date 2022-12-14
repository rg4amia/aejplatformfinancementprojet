@extends('frontend.layout.main')
@section('content')
    <section>

    </section>
    <!--END HEADER SECTION-->

    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <h2><span>Mentorat solidaire (Business Angel)  </span> <!-- Family Package --></h2>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Mentorat solidaire (Business Angel) </a>
                    </li>
                </ul>
                <p>Mentorat solidaire (Business Angel) </p>
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
                        <h2>Mentorat solidaire (Business Angel) </h2> </div>
                    <!--====== TOUR DESCRIPTION ==========-->

                    <div class="tour_head1 l-info-pack-days days">
                        <h3>Description</h3>
                        <ul>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Composantes</h4>
                                <p>- Accompagnement par des mentors - investisseurs des projets de cr??ation ou de d??veloppement de petites entreprises formelles.</p>

                                <p>- Coaching (leadership, comp??tences de vie, etc.), appui ?? la structuration, appui ?? l???acc??s au march??, mise en r??seau, etc.</p>

                                <p>- Appui financier des mentors.</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Cibles</h4>
                                <p>- Jeunes (18 ?? 40 ans) primo entrepreneurs ou d??j?? en activit??.</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Besoins de financement</h4>
                                <p>- 5 000 000 F CFA maximum</p>
                            </li>
                            <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4> Conditions de financement</h4>
                                <p>- Appui en subvention du mentor, en dette ou prise de participation minoritaire.</p>
                            </li>
                        </ul>
                        <br>
                        @auth
                            @role('promoteur')
                             <a href="{{route('form.projetguichet1')}}"><button class="btn btn-info"> Soumettre un projet</button></a>
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
