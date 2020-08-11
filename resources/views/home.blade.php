@extends('layouts.app')

@section('title','Crear Administrador')
@section('body-class','product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/img.jpg')}}');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title text-center">Bienvenido {{ Auth::User()->name }}</h2>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                

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