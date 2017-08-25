@extends('layouts.app')

@section('content')
  <div class="container">
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
                      <input id="image" class="form-control" type="file" name="image">
                    </div>

                    <div class="col-xxs-12 col-xs-9 col-md-8">
                      {{-- Nombre --}}
                      <div class="col-xxs-12 col-xs-3 col-md-4 col-md-offset-1 well-sm">
                        Nombre:
                      </div>
                      <div class="col-xxs-12 col-xs-9 col-md-7 well-sm">
                        {{ Auth::user()->name }}
                      </div>

                      {{-- Apellido --}}
                      <div class="col-xxs-12 col-xs-3 col-md-4 col-md-offset-1 well-sm">
                        Apellido:
                      </div>
                      <div class="col-xxs-12 col-xs-9 col-md-7 well-sm">
                        {{ Auth::user()->surname }}
                      </div>

                      {{-- email --}}
                      <div class="col-xxs-12 col-xs-3 col-md-4 col-md-offset-1 well-sm">
                        E-Mail:
                      </div>
                      <div class="col-xxs-12 col-xs-9 col-md-7 well-sm">
                        {{ Auth::user()->email }}
                      </div>

                      {{-- Telefono --}}
                      <div class="col-xxs-12 col-xs-3 col-md-4 col-md-offset-1 well-sm">
                        Telefono:
                      </div>
                      <div class="col-xxs-12 col-xs-9 col-md-7 well-sm">
                        {{ Auth::user()->phone }}
                      </div>

                      {{-- Cambiar contraseña --}}
                      <div class="col-xxs-12 col-xs-4 col-md-4 col-md-offset-1 well-sm">
                        Contraseña:
                      </div>
                      <div class="col-xxs-12 col-xs-8 col-md-7 well-sm">
                        <a href="{{ route('users-change') }}">
                          <button class="btn btn-sm btn-primary">
                              Cambiar contraseña
                          </button>
                        </a>
                      </div>

                      {{-- Cambiar Imagen --}}
                      <div class="col-xxs-12 col-xs-4 col-md-4 col-md-offset-1 well-sm">
                        Imagen de perfil:
                      </div>
                      <div class="col-xxs-12 col-xs-8 col-md-7 well-sm">
                        <a>
                          <button class="btn btn-sm btn-primary">
                              Cambiar imagen (armar)
                          </button>
                        </a>
                      </div>

                    </div>

                  </div>
              </div>

              {{-- Cargamos la lista con los productos de ese usuario --}}
              @php
                $productUser = App\Product::where('user_id', Auth::user()->id)->paginate(10);
              @endphp

              @if ($productUser)
                <div class="panel panel-default">
                  <div class="panel-heading">Los productos de </div>
                  <div style="padding: 15px 5px 5px 15px;">
                    <a href="product-create/"><button class="btn btn-md btn-primary">Nuevo producto</button></a>
                  </div>
                  <div class="panel-body">
                    <div class="responsive-table">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th>Action</th>
                          </tr>
                        </thead>


                          <tbody>
                            @foreach ($productUser as $product)
                              <tr>
                                <td><img class="img-responsive" width="30px" height="30px"src="{{ $product->image->source }}"></td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->priceText() }}</td>
                                <td>{{ $product->quant_sold }}</td>
                                <td>
                                  <a ><button onclick="editAlert({{$product->id}})" class="btn btn-sm btn-warning">Editar</button></a>
                                  <a ><button onclick="deleteAlert({{$product->id}} , {{Auth::user()->id}})" class="btn btn-sm btn-danger">Borrar</button></a>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>

                      </table>

                      {{-- Mostramos los enlaces --}}
                      {{ $productUser->links() }}
                    </div>
                  </div>

                </div>
              @endif
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
