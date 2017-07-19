<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
          <link href="{{ asset('css/stylesMaster.css') }}" rel="stylesheet">
        <title>ZooMarket</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 6vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Ingresa</a>
                        <a href="{{ url('/register') }}">Regístrate</a>
                    @endif
                </div>
            @endif
      </div>
            <div class="content">
              <div class="body_home">
      <div class="principalContenedorBanner">


        <div class="w3-content w3-display-container" style="">
                <img class="mySlides" src="{{asset('images/index/gatoBanner.jpg')}}" style="width:100%">
                <img class="mySlides" src="{{asset('images/index/perroBanner.jpg')}}" style="width:100%">
                <img class="mySlides" src="{{asset('images/index/birdBanner.jpg')}}" style="width:100%">
              <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">

                  <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                  <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                  <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
              </div>
        </div>
      </div>

      <section class="body_products_grilla">
        <article class="products_body">
          <img src="{{asset('/images/index/perro_portada_seccion.jpg')}}" alt="">
                <div class="title.product">
                  <a href="#">Perros!</a>
                </div>
        </article>
        <article class="products_body">
          <img src="{{asset('/images/index/gato_portada_seccion.jpg')}}" alt="">
                <div class="title.product">
                  <a href="#">Gatos!</a>
                </div>
        </article>
        <article class="products_body">
          <img src="{{asset('/images/index/cruza_portada.jpg')}}" alt="">
                <div class="title.product">
                  <a href="#">Ofertas!</a>
                </div>
        </article>
        <article class="products_body">
          <img src="{{asset('/images/index/otras_mascotas_portada.jpg')}}" alt="">
                <div class="title.product">
                  <a href="#">Otras mascotas!</a>
                </div>
        </article>
      </section>
    </div>


                <!-- <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>

        @include('layouts.footer')
          <script src="{{ asset('js/funciones.js') }}"></script>
    </body>
</html>
