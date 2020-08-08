@extends('layouts.app')

@section('title','Editar Usuario')
@section('body-class','product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/img.jpg')}}');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title text-center">Editar Usuario Seleccionado</h2>

<!--            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
-->

            <form method="post" action="{{ url('') }}">    
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Telefono</label>
                            <input type="text" class="form-control" name="telefono" >
                        </div>
                    </div>

                    
                    <div class="col-sm-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Correo</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                      <div class="col-sm-3">
                        <div class="form-group label-floating">
                            <label class="control-label">Rol</label>
                            <select class="form-control" name="rol">
                                <option value="0">No</option>
                                <option value="1">si</option>
                            </select>
                        </div>
                    </div>
                <br><br><br><br><br><br><br><br>

                    <button class="btn btn-info">Guardar Cambios</button>
                    <a href="{{ url('/admin/empresa') }}" class="btn btn-default">Cancelar</a>
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
@endsection