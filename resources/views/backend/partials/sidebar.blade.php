<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('backend.dashboard') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Tableau de Bord</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#guichet1" aria-expanded="false" aria-controls="guichet1">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Guichet 1</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="guichet1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('backend.guichet-one.index') }}">
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
                    <a class="nav-link" href="{{ route('backend.guichet-three.index') }}">
                        Liste projet
                    </a>
                </li>
              </ul>
            </div>
          </li>

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
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#guichet4" aria-expanded="false" aria-controls="guichet4">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Guichet 4</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="guichet4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('backend.guichet-four.index') }}">
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
                    <a class="nav-link" href="{{ route('backend.guichet-five.index') }}">
                        Liste projet
                    </a>
                </li>
              </ul>
            </div>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
              </ul>
            </div>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> --}}
        </ul>
      </nav>
