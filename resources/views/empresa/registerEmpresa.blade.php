@extends('layouts.app')

@section('title', 'Registra Empresa')
@section('body-class','signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/img.jpg')}}'); background-size: cover; background-position: top center;"></br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ url('empresa') }}">
                        {{ csrf_field() }}
                        <div class="header header-primary text-center">
                            <h4>Registra tu Empresa</h4>
                        </div>
                           
                            <div class="form-row">
                              <div class="form-group col-md-5">
                                <label for="inputCity">Nombre Empresa </label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required autofocus placeholder="Comipredh">
                              </div>
                              <div class="form-group col-md-4">
                                  <label for="inputCity">RFC</label>
                                <input type="text" class="form-control" id="rfc" name="rfc"  required autofocus placeholder="R0AL8105218V3">
                              </div>
                              <div class="form-group col-md-3">
                                  <label for="inputCity">CP</label>
                                <input type="number" class="form-control" id="cp" name="cp" required autofocus placeholder="15300">
                              </div>
                            </div>
                              <div class="form-group col-md-6">
                                  <label for="inputCity">Calle</label>
                                <input type="text" class="form-control" id="calle" name="calle" required autofocus placeholder="20 De Noviembre">
                              </div>
                              <div class="form-group col-md-3">
                                <label for="inputCity">Numero Exterior</label>
                                <input type="text" class="form-control" id="n_ext" name="n_ext" required autofocus placeholder="277">
                              </div>
                              <div class="form-group col-md-3">
                                <label for="inputCity">Numero Interior</label>
                                <input type="text" class="form-control" id="n_int" name="n_int"  autofocus placeholder="02">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputCity">Colonia</label>
                                <input type="text" class="form-control" id="colonia" name="colonia"  required autofocus placeholder="Venustiano Carranza">
                              </div>
                              <div class="form-group col-md-4">
                                  <label for="inputCity">Municipio</label>
                                  <input id="municipio" type="text" class="form-control" name="municipio"  required autofocus placeholder="Venustiano Carranza">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputCity">Estado</label>
                                <input id="estado" type="text" class="form-control" name="estado" required placeholder="Ciudad de Mexico ">

                            </div>
                            <div class="form-group col-md-7">
                                <label for="inputCity">Correo</label>
                                <input type="text" class="form-control" id="correo" name="correo"  required autofocus placeholder="comiprehd@gmail.com">
                              </div>
                              <div class="form-group col-md-5">
                                  <label for="inputCity">Contraseña</label>
                                      <input id="contrasena" type="password" class="form-control" name="contrasena" required autofocus placeholder="Mayor a 8 Caracteres">
                              </div>
                              

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                 <center>   <button type="submit" class="btn btn-info">
                                        Registrarse
                                    </button></center>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer.footer')
@endsection
