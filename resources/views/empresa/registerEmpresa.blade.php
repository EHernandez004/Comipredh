@extends('layouts.app')

@section('title', 'Registra Empresa')
@section('body-class','signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/img.jpg')}}'); background-size: cover; background-position: top center;"></br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="header header-primary text-center">
                            <h4>Registra tu Empresa</h4>
                        </div>
                           
                            <div class="form-row">
    <div class="form-group col-md-5">
      <label for="inputCity">Nombre Empresa </label>
      <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ old('nombre') }}" required autofocus placeholder="Comipredh">
    </div>
    <div class="form-group col-md-4">
       <label for="inputCity">RFC</label>
      <input type="text" class="form-control" id="RFC" name="RFC" value="{{ old('RFC') }}" required autofocus placeholder="R0AL8105218V3">
    </div>
    <div class="form-group col-md-3">
        <label for="inputCity">CP</label>
      <input type="number" class="form-control" id="CP" name="CP" value="{{ old('CP') }}" required autofocus placeholder="15300">
    </div>
  </div>
    <div class="form-group col-md-6">
       <label for="inputCity">Calle</label>
      <input type="text" class="form-control" id="calle" name="calle" value="{{ old('calle') }}" required autofocus placeholder="20 De Noviembre">
    </div>
   <div class="form-group col-md-3">
      <label for="inputCity">Numero Exterior</label>
      <input type="text" class="form-control" id="N_Ext" name="N_Ext" value="{{ old('N_Ext') }}" required autofocus placeholder="277">
    </div>
    <div class="form-group col-md-3">
      <label for="inputCity">Numero Interior</label>
      <input type="text" class="form-control" id="N_Int" name="N_Int" value="{{ old('N_Int') }}" required autofocus placeholder="02">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Colonia</label>
      <input type="text" class="form-control" id="colonia" name="colonia" value="{{ old('colonia') }}" required autofocus placeholder="Venustiano Carranza">
    </div>
   <div class="form-group col-md-4">
       <label for="inputCity">Municipio</label>
                                <input id="Municipio" type="text" class="form-control" name="Municipio" value="{{ old('Municipio') }}" required autofocus placeholder="Venustiano Carranza">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Estado</label>
                <input id="Estado" type="text" class="form-control" name="Estado" value="{{ old('Estado') }}"required placeholder="Ciudad de Mexico ">

</div>
<div class="form-group col-md-7">
      <label for="inputCity">Correo</label>
      <input type="text" class="form-control" id="correo" name="correo" value="{{ old('correo') }}" required autofocus placeholder="comiprehd@gmail.com">
    </div>
   <div class="form-group col-md-5">
       <label for="inputCity">Contraseña</label>
            <input id="contrasena" type="text" class="form-control" name="contrasena" value="{{ old('contrasena') }}" required autofocus placeholder="Mayor a 8 Caracteres">
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
    
    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="">
                            &copy; Derechos Reservados por COMIPREDH AC.
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href=""> Nuestras Redes Sociales
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                            <i class="fa fa-instagram"></i>
                        </a>
        </div>
    </footer>
</div>
@endsection
