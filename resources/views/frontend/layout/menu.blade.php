<div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('frontend/images/logo_aej_280x50.png') }}" alt=""/>
                        </a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Accueil</a>
                            </li>
                            <li class="admi-menu">
                                <a href="#" class="mm-arr">Guichet de financement</a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="admi-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{ route('guichet1') }}">
                                                       {{--  <img src="frontend/images/sight/1.jpg" alt=""> --}}
                                                        <img src="{{ asset('frontend/images/t5.png') }}" alt="">
                                                        <span>Business Angel</span>
                                                    </a>
                                                </div>

                                                <p>- Accompagnement par un mentor</p>
                                                <p>- Coaching</p>
                                                <p>- Appui financier des mentors</p>
                                                <a href="{{ route('guichet1') }}" class="mm-r-m-btn">Voir plus</a>
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{ route('guichet2') }}">
                                                        {{-- <img src="frontend/images/sight/2.jpg" alt=""> --}}
                                                        <img src="{{ asset('frontend/images/t1.png') }}" alt="">
                                                        <span>Activit?? G??n??ratrice de revenu(AGR)</span>
                                                    </a>
                                                </div>
                                                {{--  <p>(i)  accompagnement des projets de cr??ation ou de d??veloppement de petites activit??s</p>
                                                 <p>(ii) acc??s ?? la formation, au financement et au dispositif de suivi-encadrement</p> --}}
                                                <p>- Accompagnement des projets de cr??ation</p>
                                                <p>- Acc??s ?? la formation</p>
                                                <p>- Acc??s au financement</p>
                                                <a href="http://financement.projetsagir.com/" class="mm-r-m-btn">Voir plus</a>
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{ route('guichet3') }}">
                                                        {{-- <img src="frontend/images/sight/3.jpg" alt=""> --}}
                                                        <img src="{{ asset('frontend/images/t4.png') }}" alt="">
                                                        <span>Micro et petite Entreprise (MPE)</span>
                                                    </a>
                                                </div>

                                                <p>- Accompagnement des projets...</p>
                                                <p>- Acc??s ?? la formation...</p>
                                                <p>- Pilotage du processus par les Conseils R??gionaux </p>
                                                <a href="{{ route('guichet3') }}" class="mm-r-m-btn">Voir plus</a>
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{ route('guichet4') }}">
                                                        <img src="{{ asset('frontend/images/t3.png') }}" alt="">
                                                        {{-- <img src="frontend/images/sight/4.jpg" alt=""> --}}
                                                        <span>Moyenne Entreprise et Projets Structurant</span>
                                                    </a>
                                                </div>

                                                <p>- Accompagnement des projets...</p>
                                                <p>- D??veloppement d???entreprises formelles</p>
                                                <p>- Acc??s au financement...</p>
                                                <a href="{{ route('guichet4') }}" class="mm-r-m-btn">Voir plus</a>
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s4">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="{{ route('guichet5')}}">
                                                        <img src="{{ asset('frontend/images/t4.png') }}" alt="">
                                                        {{-- <img src="frontend/images/sight/4.jpg" alt=""> --}}
                                                        <span>Capital d'investisement</span>
                                                    </a>
                                                </div>
                                                    <p>- Accompagnement des projets...</p>
                                                    <p>- D??veloppement d???entreprises innovantes</p>
                                                    <p>- Financement en capital...</p>
                                                <a href="{{ route('guichet5')}}" class="mm-r-m-btn">Voir plus</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="{{route('eligibilite')}}">Conditions d?????ligibilit??</a>
                            </li>
                            <li><a href="{{route('apropos')}}">A propos</a>
                            </li>
                            <li><a href="{{route('contacts')}}">Contactez nous</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
