@role('admin')
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('backend.admin.dashboard') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Tableau de Bord</span>
            </a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.admin.guichet-one.index') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Guichet 1</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.admin.guichet-three.index') }}">
                    <i class="icon-list menu-icon"></i>
                    <span class="menu-title">Guichet 3</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.admin.guichet-four.index') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Guichet 4</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.admin.guichet-five.index') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Guichet 5</span>
                </a>
            </li>
         {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#guichet1" aria-expanded="false" aria-controls="guichet1">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Guichet 1</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="guichet1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('backend.admin.guichet-one.index') }}">
                        Liste projet
                    </a>
                </li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#guichet3" aria-expanded="false" aria-controls="guichet3">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Guichet 3</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="guichet3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('backend.admin.guichet-three.index') }}">
                        Liste projet
                    </a>
                </li>
              </ul>
            </div>
          </li>--}}

          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#guichet-3" aria-expanded="false" aria-controls="guichet-3">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Guichet 3</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="guichet-3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('backend.guichet-three.index') }}">Liste projet</a></li>
              </ul>
            </div>
          </li> --}}
         {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#guichet4" aria-expanded="false" aria-controls="guichet4">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Guichet 4</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="guichet4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('backend.admin.guichet-four.index') }}">
                        Liste projet
                    </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#guichet5" aria-expanded="false" aria-controls="guichet5">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Guichet 5</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="guichet5">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.admin.guichet-five.index') }}">
                            Liste projet
                        </a>
                    </li>
                </ul>
            </div>
        </li>--}}
     </ul>
</nav>
@endrole

@role('promoteur')
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('backend.promoteur.dashboard') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Tableau de Bord</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('backend.promoteur.suiviprojet') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Mes suivies</span>
            </a>
          </li>
        </ul>
    </nav>
@endrole
