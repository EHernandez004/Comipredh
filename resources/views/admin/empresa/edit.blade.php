@extends('layouts.app')

@section('title','Editar Acceso de la Empresa')
@section('body-class','product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/img.jpg')}}');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title text-center">Editar Acceso de la Empresa Seleccionada</h2>

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

            <form method="post" action="">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre de la Empresa</label>
                            <input type="text" class="form-control" name="nombre" value="">
                        </div>
                    </div>
                     <div class="col-sm-4">
                        <div class="form-group label-floating">
                            <label class="control-label">RFC</label>
                            <input type="text" class="form-control" name="rfc" value="">
                        </div>
                    </div>

                     <div class="col-sm-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Estado</label>
                            <input type="text" class="form-control" name="estado" value="">
                        </div>
                    </div>
         <div class="col-sm-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Municipio</label>
                            <input type="text" class="form-control" name="municipio" value="">
                        </div>
                    </div>
            <div class="col-sm-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Correo</label>
                            <input type="text" class="form-control" name="correo_enc" value="">
                        </div>
                    </div>
            <div class="col-sm-4">
             <div class="form-group label-floating">
                            <label class="control-label"></label>
                            <input type="text" class="form-control" name="" value="">
                        </div>
                    </div>


                <button class="btn btn-info">Guardar cambios</button>
                <a href="{{ url('/admin/empresa') }}" class="btn btn-default">Cancelar</a>
            </form>    
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
