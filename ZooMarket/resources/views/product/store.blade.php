@extends('layouts.app')

@section('content')
  <div class="container">
    <form method="POST" action="/product-store" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-xs-12 col-sm-4 item-photo">
          <div class="">
            <img style="max-width:100%;" src="/images/logos/no_image.png"/>
            <label class="control-label">Subir foto</label>
            <input id="image" class="form-control" type="file" name="image">
          </div>
        </div>

        <div id="productDetail" class="col-xs-8" style="border:0px solid gray">

          {{-- Titulo --}}
          <div class="row">
            <div class="col-xxs-12 col-xs-3 col-md-2">
              Titulo:
            </div>
            <div class="col-xxs-12 col-xs-9 col-md-8">
              <input class="form-control" type="text" name="title" value="">
            </div>
          </div>

          {{-- Precio --}}
          <div class="row">
            <div class="col-xxs-12 col-xs-3 col-md-2">
              Precio:
            </div>
            <div class="col-xxs-12 col-xs-9 col-md-2">
              <input class="form-control" type="text" name="price" value="">
            </div>
          </div>

          {{-- Cantidad a vender --}}
          <div class="row">
            <div class="col-xxs-12 col-xs-3 col-md-2">
              Cantidad:
            </div>
            <div class="col-xxs-12 col-xs-9 col-md-2">
              <input class="form-control" type="text" name="quant_sold" value="1">
            </div>
          </div>

          {{-- Categoria --}}
          <div class="row">
            <div class="col-xxs-12 col-xs-3 col-md-2">
              Categoria:
            </div>
            <div class="col-xxs-12 col-xs-9 col-md-2">
              <input class="form-control" type="text" name="category_id" value="">
            </div>
          </div>

          {{-- Descripcion --}}
          <div class="row">
            <div class="col-xxs-12 col-xs-3 col-md-2">
              Descripción:
            </div>
            <div class="col-xxs-12 col-xs-9 col-md-8">
              <textarea class="form-control" name="description" rows="9"></textarea>
            </div>
          </div>

          {{-- Boton guardar --}}
          <div class="row">
            <div class="col-xxs-12 col-xs-3 col-md-2">
            </div>
            <div class="col-xxs-12 col-xs-9 col-md-8" style="text-align: left;">
              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Guardar cambios</button>
            </div>
          </div>


        </div>
      </div>
    </form>
  </div>

<script>
  function plus() {
    var now = $(".section > div > input").val();
    if ($.isNumeric(now)){
        $(".section > div > input").val(parseInt(now)+1);
    }else{
        $(".section > div > input").val("1");
    }
  };

  function minus() {
    var now = $(".section > div > input").val();
    if ($.isNumeric(now)){
        if (parseInt(now) -1 > 0){ now--;}
        $(".section > div > input").val(now);
    }else{
        $(".section > div > input").val("1");
    }
  }
</script>
@endsection
