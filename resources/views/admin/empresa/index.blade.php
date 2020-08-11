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
                                <th class="text-center"> ID_Empresa </th>
                                <th class="col-md-2 text-center"> Nombre </th>
                                <th class="col-md-2 text-center"> RFC </th>
                                <th class="col-md-2 text-center"> Municipio </th>
                                <th class="col-md-2 text-center"> Correo_Encargado </th>
                                <th class="col-md-2 text-center"> Acceso </th>
                                <th class="col-md-2 text-center"> Acciones </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($empresas as $empresa)
                            <tr>
                                <td class="text-center"> {{$empresa->id}} </td>
                                <td>{{$empresa->nombre}}</td>
                                <td>{{$empresa->rfc}}</td>
                                <td>{{$empresa->municipio}}</td>
                                <td>{{$empresa->correo}}</td>
                                <td>{{$empresa->acceso}}</td>
                                <td class = "td-actions text-right">
                                    <form method="post" action="{{ url('/admin/empresa/'.$empresa->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                        <a href="#" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs" target="_blank">
                                                <i class="fa fa-info"></i>
                                        </a>
                                        <a href="{{ url('/admin/empresa/'.$empresa->id.'/edit') }}"  rel="tooltip" title="Editar Acceso" class="btn btn-success btn-simple btn-xs">
                                            <i class = "fa fa-edit"></i>
                                        </a>
                                        <button type="submit" rel="tooltip" title = "Eliminar" class = "btn btn-danger btn-simple btn-xs">
                                            <i class = "fa fa-times"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$empresas->links() }}
                </div>
            </div>        
        </div>
    </div>
</div>


@include('footer.footer')
@endsection
