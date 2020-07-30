@extends('layouts.app')

@section('body-class','landing-page')

@section('content')
<div class="wrapper">
        <div class="header header-filter" style="background-image: url('{{asset('img/img.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  <h1 class="title">Buscar Trabajo Nunca fue más Fácil</h1>
                        
                        <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input type="buscador" class="form-control form-control-lg" placeholder="Buscar Puesto ó Área">
                        </div>
                        <div class="col-12 col-md-3">
                            <button type="buscar" class="btn btn-block btn-lg btn-primary">Buscar</button>
                        </div>
                    </div>
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