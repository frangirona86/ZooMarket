{{-- @extends('layouts.app')

@section('header') --}}

  <nav class="navbar navbar-default navbar-static-top">
      <div class="container">


        <div class="row">
          <div class="col-xxs-12 col-xs-2 bg-warning">
            <a class="" href="{{ url('/') }}">
              <img id="headerMainLogo" src="/images/logos/logo-zoo.png">
            </a>
          </div>
          <div class="col-xxs-10 col-xs-8 bg-primary">
            buscar
          </div>
          <div class="col-xxs-2 col-xs-2 bg-info">
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  &nbsp;
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a href="{{ route('login') }}">Ingresa</a></li>
                      <li><a href="{{ route('register') }}">Regístrate</a></li>
                  @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Cerrar sesión
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endif
              </ul>
            </div>
            <div class="navbar-header">
              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
          </div>
        </div>
        <div class="row" style="background-color: rgb(80, 80, 80);">
          <div id="headerMainMenu" class="container collapse navbar-collapse">
            <div class="btn-group">
              <div class="btn-group">
                <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Dropdown <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <button type="button" class="btn btn-primary">Button</button>
              <button type="button" class="btn btn-primary">Another Button</button>
            </div>
          </div>
        </div>


      </div>
  </nav>


{{-- @endsection --}}
