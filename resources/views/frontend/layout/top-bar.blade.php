<div class="ed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ed-com-t1-left">
                    <ul>
                        <li><a href="#">Localisation: PLATEAU, BD CLOZEL / IMMEUBLE PERIGNON</a>
                        </li>
                        <li><a href="#">Telephone: +225 27 20 21 50 53</a>
                        </li>
                    </ul>
                </div>
                <div class="ed-com-t1-right">
                     @auth
                        @role('admin')
                            <ul>
                                <li>
                                    <a href="{{ route('backend.dashboard') }}">Tableau de bord</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.index') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                </li>
                                <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        @else
                            <ul>
                                <li>
                                    <a href="{{ route('backend.promoteur.dashboard') }}">Tableau de bord</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.index') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                </li>
                                <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        @endrole
                     @else
                        <ul>
                            <li>
                                <a href="{{ route('user.index') }}">Connexion</a>
                            </li>
                            <li>
                                <a href="{{ route('user.enregistrer') }}">S'inscrire</a>
                            </li>
                        </ul>
                     @endauth

                </div>
                <div class="ed-com-t1-social">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/AgenceEmploiJeunes">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/agence-emploi-jeunes/">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/EmploiJeunesci">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
