@extends('layouts.app')

@section('content')
<header class="business-header" id="bannerIndex">
    <!-- <div class="container"> -->
        <div class="row">

                  <img class="mySlides" src="{{asset('images/index/gatoBanner.jpg')}}" style="width:100%;">
                  <img class="mySlides" src="{{asset('images/index/perroBanner.jpg')}}" style="width:100%; display: none;">
                  <img class="mySlides" src="{{asset('images/index/birdBanner.jpg')}}" style="width:100%; display: none;">
                  <!-- <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                  </div> -->

            </div>
        <!-- </div> -->
  </header>

<!-- Page Content -->
<div class="container" id="myIndex">


    <!-- /.row -->

    <hr>

    <div class="row sectionPort" >
        <div class="col-sm-4">
            <a href="#"><img class="img-circle img-responsive img-center" src="{{asset('/images/index/perro_portada_seccion.jpg')}}" alt="perroPortada"></a>
            <a href="#"><button type="text" class="btn btn-default indexBoton">Perros</button></a>
            <p>Aqui pondremos los que se puede encontrar sobre PERROS(Breve descripcion).</p>
        </div>
        <div class="col-sm-4">
            <a href="#"><img class="img-circle img-responsive img-center" src="{{asset('/images/index/gato_portada_seccion.jpg')}}" alt="gatoPortada"></a>
            <a href="#"><button type="text" class="btn btn-default indexBoton">Gatos</button></a>
            <p>Aqui pondremos los que se puede encontrar sobre GATOS(Breve descripcion).</p>
        </div>
        <div class="col-sm-4">
            <a href="#"><img class="img-circle img-responsive img-center" src="{{asset('/images/index/otras_mascotas_portada.jpg')}}" alt="otrasMascotas"></a>
            <a href="#"><button type="text" class="btn btn-default indexBoton">Otras Mascotas</button></a>
            <p>Aqui pondremos los que se puede encontrar sobre OTRAS MASCOTAS(Breve descripcion).</p>
        </div>
    </div>

  <script src="{{ asset('js/funciones.js') }}"></script>
@endsection
