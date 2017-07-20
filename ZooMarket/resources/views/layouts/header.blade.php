  <div class="bs-example">
      <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button id="headerMainMobileMenu" type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a href="{{ url('/') }}">
                <img id="headerMainLogo" src="/images/logos/logo-zoo.png">
              </a>
          </div>
          <!-- Collection of nav links, forms, and other content for toggling -->
          <div id="navbarCollapse" class="collapse navbar-collapse">
              {{-- Menu principal --}}
              <ul id="headerMainMenu" class="nav navbar-nav">
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">Menu <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li><a href="#">Inbox</a></li>
                          <li><a href="#">Drafts</a></li>
                          <li><a href="#">Sent Items</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Trash</a></li>
                      </ul>
                  </li>
              </ul>

              <form id="headerSearchBar" class="navbar-form navbar-left">
              	<div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                      </span>
                  </div>
              </form>

                @if (Auth::guest())
                  <ul id="headerMainLogin" class="nav navbar-nav navbar-right">
                    <div class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ url('/login') }}">Ingresa</a>
                            <a href="{{ url('/register') }}">Regístrate</a>
                        @endif
                    </div>
                  </ul>
                @else
                  <ul id="headerMainLogin" class="nav navbar-nav navbar-right">
                    <div class="top-right links">
                    {{-- <li class=""> --}}
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Cerrar sesion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    {{-- </li> --}}
                  </div>
                </ul>
                @endif

          </div>
      </nav>
  </div>
