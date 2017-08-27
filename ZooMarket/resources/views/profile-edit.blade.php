@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="form-horizontal" action="/profile-update" method="POST" action="/profile-edit">

      <div class="row">
          <div class="col-xs-12">
              <div class="panel panel-default">
                  <div class="panel-heading">Mi cuenta</div>
                  <div class="panel-body">

                    @php
                      $imagePath = App\Image::where('id', Auth::user()->image_id)->first();
                      $imagePath = $imagePath->source;
                    @endphp

                    <div class="col-xxs-12 col-xs-3 col-md-3 col-md-offset-1">
                      <img src="{{$imagePath}}" class="img-thumbnail">
                      <!-- <input id="image" class="form-control" type="file" name="image"> -->
                    </div>

                    <div class="col-xxs-12 col-xs-9 col-md-8">
                      {{-- Nombre --}}
                      <div class="row">

                        <div class="col-xxs-12 col-xs-3 col-md-2 col-md-offset-1 well-sm">
                          Nombre:
                        </div>
                        <div class="col-xxs-12 col-xs-9 col-md-7">
                          <input class="form-control" type="text" name="name" value="{{  Auth::user()->name }}">
                        </div>
                      </div>

                      {{-- Apellido --}}
                      <div class="row">
                        <div class="col-xxs-12 col-xs-3 col-md-2 col-md-offset-1 well-sm">
                          Apellido:
                        </div>
                        <div class="col-xxs-12 col-xs-9 col-md-7">
                          <input class="form-control" type="text" name="surname" value="{{ Auth::user()->surname }}">
                        </div>

                      </div>
                      {{-- email --}}

                      <div class="row">
                          <div class="col-xxs-12 col-xs-3 col-md-2 col-md-offset-1 well-sm">
                            E-Mail:
                          </div>
                          <div class="col-xxs-12 col-xs-9 col-md-7 ">
                            <input class="form-control" type="text" name="email" value="{{ Auth::user()->email }}">
                          </div>
                      </div>

                      {{-- Telefono --}}
                      <div class="row">

                      <div class="col-xxs-12 col-xs-3 col-md-2 col-md-offset-1 well-sm">
                        Telefono:
                      </div>
                      <div class="col-xxs-12 col-xs-9 col-md-7 ">
                            <input class="form-control" type="text" name="phone" value="{{ Auth::user()->phone }}">
                      </div>
                    </div>

                      <a href="{{ route('profile-update') }}" class="btn btn-primary active" role="button">Actualizar Datos</a>

                  </form>

                    <a href="{{ route('profile') }}" class="btn btn-success" role="button">Volver al Perfil</a>

                  </div>
              </div>
          </div>
      </div>
    </div>
</div>
  <script>
    function deleteAlert(productId, idUser) {
        $.confirm({
            title: '¿Esta seguro que desea borrar el producto?',
            content: '',
            type: 'red',
            buttons: {
                accept: {
                    text: 'Si, quiero borrarlo!',
                    btnClass: 'btn-danger',
                    isHidden: false, // initially not hidden
                    isDisabled: false, // initially not disabled
                    action: function(){
                      window.location.href = 'product-destroy/' + productId + ',' + idUser ;
                    }
                },
                cancel: {
                    text: 'Cerrar',
                    btnClass: 'btn-default',
                    keys: ['enter'],
                    isHidden: false, // initially not hidden
                    isDisabled: false, // initially not disabled
                    action: function(){}
                }
            }
        });
    };

    function editAlert(productId) {
        $.confirm({
            title: '¿Esta seguro que desea editar el producto?',
            content: '',
            type: 'orange',
            buttons: {
                accept: {
                    text: 'Si, quiero editarlo',
                    btnClass: 'btn-warning',
                    isHidden: false, // initially not hidden
                    isDisabled: false, // initially not disabled
                    action: function(){
                      window.location.href = 'product-edit/' + productId;
                    }
                },
                cancel: {
                    text: 'Cerrar',
                    btnClass: 'btn-default',
                    keys: ['enter'],
                    isHidden: false, // initially not hidden
                    isDisabled: false, // initially not disabled
                    action: function(){}
                }
            }
        });
    };

  </script>

@endsection
