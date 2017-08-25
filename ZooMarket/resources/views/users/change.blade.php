@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Cambiar Password</div>
                <div class="panel-body">

                <form method="post" class="form-horizontal" id="myForm"  action="/change-pass-change">

                           {{csrf_field()}}

                           <div class="form-group">
                                    <label for="mypassword">Introduce tu actual password:</label>
                                        <input type="password" name="mypassword" class="form-control">
                                    <div class="text-danger">{{$errors->first('mypassword')}}</div>
                           </div>
                           <div class="form-group">
                                    <label for="password">Introduce tu nuevo password:</label>
                                        <input type="password" name="npassword" class="form-control">
                                    <div class="text-danger">{{$errors->first('password')}}</div>
                           </div>
                           <div class="form-group">
                                      <label for="mypassword">Confirma tu nuevo password:</label>
                                      <input type="password" name="cnpassword" class="form-control">
                           </div>
                                    <button type="submit" class="btn btn-primary">Cambiar mi password</button>
                  </form>
@endsection
