@extends('layouts.app')

@section('header')

  <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0;">
  {{-- <nav class="navbar navbar-default navbar-fixed-top"> --}}

  <div class="container">
    <div class="row">
      <div class="col-xs-2 bg-warning">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img style="width: 100%; min-width: 50px; padding: 0;" src="/images/logos/logo-zoo.png">
        </a>
      </div>
      <div class="col-xs-8 bg-primary">
        buscar
      </div>
      <div class="col-xs-2 bg-info">
        login
      </div>
    </div>
  </div>

      <div class="container">
          <div class="navbar-header">

              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

          </div>
          {{-- <!-- Branding Image -->
          <div class="col-xs-2 col-md-2">
            <a class="navbar-brand" href="{{ url('/') }}">
              <img style="width: 100%;" src="/images/logos/logo-zoo.png">
            </a>
          </div> --}}


          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
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
          {{-- <div class="row"> --}}
            <div class="col-xs-8 col-xs-offset-2">
                <div class="input-group">
                    <input type="hidden" name="search_param" value="all" id="search_param">
                    <input type="text" class="form-control" name="x" placeholder="Search term...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </div>
          {{-- </div> --}}

      </div>
      <div class="col-xs-12" style="background-color: rgb(80, 80, 80);">
        <div class="container">
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
  </nav>

@endsection
