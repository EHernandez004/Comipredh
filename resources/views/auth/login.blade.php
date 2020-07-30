@extends('layouts.app')

@section('body-class','signup-page')

@section('content')

<div class="header header-filter" style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    
                    <form class="form" method="POST" action="{{route('login')}}">
                        {{ csrf_field() }}
                        <div class="header header-primary text-center">
                            <h4>Inicio de Sesión</h4>
                        </div>

                        <div class="content">

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <input id="email" type="email" class="form-control" name="email" required placeholder="alguien@comipredh.com"/>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña..."/>
                            </div>

                             <!--If you want to add a checkbox to this form, uncomment this code-->

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Recordar la Sesión
                                </label>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class=" btn btn-info">Ingresar</button> 
                        </div>
                    <!--        <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?-->
                            </a>
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