@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="panel panel-default">
                  <div class="panel-heading">Mi cuenta</div>
                  <div class="panel-body">

                    <div class="col-xxs-12 col-xs-4 col-md-3 col-md-offset-1">
                      <img src="images/profile/default.jpg" class="img-thumbnail">
                    </div>
                    <div class="col-xxs-12 col-xs-8 col-md-7">
                      <div class="col-xxs-12 col-xs-3 col-md-2 col-md-offset-1 well well-sm" style="background-color:red;">
                        Nombre:
                      </div>
                      <div class="col-xxs-12 col-xs-9 col-md-9"  style="background-color:gold;">
                        {{ Auth::user()->name }}
                      </div>
                    </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
