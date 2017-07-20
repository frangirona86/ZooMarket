@extends('layouts.app')

@section('content')
  <div class="content">
    <div class="body_home">
      <div class="principalContenedorBanner">
        <div class="w3-content w3-display-container" style="">
          <img class="mySlides" src="{{asset('images/index/gatoBanner.jpg')}}" style="width:100%">
          <img class="mySlides" src="{{asset('images/index/perroBanner.jpg')}}" style="width:100%; display: none;">
          <img class="mySlides" src="{{asset('images/index/birdBanner.jpg')}}" style="width:100%; display: none;">
          <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
          </div>
        </div>
      </div>

      <section class="body_products_grilla">
        <article class="products_body col-md-3">
          <img src="{{asset('/images/index/perro_portada_seccion.jpg')}}" alt="">
          <div class="title.product">
            <a href="#">Perros!</a>
          </div>
        </article>
        <article class="col-md-3 products_body">
          <img src="{{asset('/images/index/gato_portada_seccion.jpg')}}" alt="">
          <div class="title.product">
            <a href="#">Gatos!</a>
          </div>
        </article>
        <article class="col-md-3 products_body">
          <img src="{{asset('/images/index/cruza_portada.jpg')}}" alt="">
          <div class="title.product">
            <a href="#">Ofertas!</a>
          </div>
        </article>
        <article class="col-md-3 products_body">
          <img src="{{asset('/images/index/otras_mascotas_portada.jpg')}}" alt="">
          <div class="title.product">
            <a href="#">Otras mascotas!</a>
          </div>
        </article>
      </section>
    </div>
  </div>

@endsection
