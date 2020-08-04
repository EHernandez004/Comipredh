@extends('layouts.app')

@section('title','Peticiones de Empresas')
@section('body-class','product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/img.jpg')}}');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de Empresas</h2>

            <div class="team">
                <div class="row">
                    <a href="">Listado de Empresas</a>

                    <table class = "table">
                        <thead>
                            <tr>
                                <th class="col-md-2 text-center"> ID_Empresa </th>
                                <th class="col-md-2 text-center"> Nombre </th>
                                <th class="col-md-2 text-center"> RFC </th>
                                <th class="col-md-2 text-center"> Municipio </th>
                                <th class="col-md-2 text-center"> Correo_Encargado </th>
                                <th class="col-md-2 text-center"> Acciones </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($empresas as $empresa)
                            <tr>
                                <td class = "text-center"> {{$empresa->id_empresa}} </td>
                                <td>{{$empresa->nombre}}</td>
                                <td>{{$empresa->rfc}}</td>
                                <td>{{$empresa->municipio}}</td>
                                <td>{{$empresa->correo_enc}}</td>
                                <td class = "td-actions text-right">
                                    <button type = "button" rel = "tooltip" title = "Ver perfil" class = "btn btn-info btn-simple btn-xs">
                                        <i class = "fa fa-user"> </i>
                                    </button>
                                    <button type = "button" rel = "tooltip" title = "Editar perfil" class = "btn btn-success btn-simple btn-xs">
                                        <i class = "fa fa-edit"> </i>
                                    </button>
                                    <button type = "button" rel = "tooltip" title = "Eliminar" class = "btn btn-danger btn-simple btn-xs">
                                        <i class = "fa fa-times"> </i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
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
@endsection
