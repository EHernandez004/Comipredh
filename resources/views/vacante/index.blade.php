@extends('layouts.app')

@section('title','Vacantes')
@section('body-class','product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/img.jpg')}}');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Vacantes</h2>

            <div class="team">
                <div class="row">
                    <a href="">Vacantes</a>

                    <table class = "table">
                        <thead>
                            <tr>
                                <th class="col-md-2 text-center"> Nombre </th>
                                <th class="col-md-2 text-center"> Area </th>
                                <th class="col-md-2 text-center"> Descripcion </th>
                                <th class="col-md-2 text-center"> Fecha </th>
                                <th class="col-md-2 text-center"> sueldo_min </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($vacantes as $vacante)
                            <tr>
                                <td>{{$vacante->nombre}}</td>
                                <td>{{$vacante->area}}</td>
                                <td>{{$vacante->descripcion}}</td>
                                <td>{{$vacante->fecha}}</td>
                                <td>{{$vacante->sueldo_min}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$vacantes->links() }}
                </div>
            </div>        
        </div>
    </div>
</div>


@include('footer.footer')
@endsection
