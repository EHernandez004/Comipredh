@extends('layouts.app')

@section('title','Administradores')
@section('body-class','product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/img.jpg')}}');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Administradores</h2>
            <a href="{{ url('/admin/user/create') }}" class="btn btn-default btn-round">Nuevo Administrador</a> 
            <div class="team">
                <div class="row">                
                    <table class = "table">
                        <thead>
                            <tr>
                                <th class="text-center"> ID_Administrador </th>
                                <th class="col-md-2 text-center"> Nombre </th>
                                <th class="col-md-2 text-center"> Apellidos </th>
                                <th class="col-md-2 text-center"> Telefono </th>
                                <th class="col-md-2 text-center"> Correo </th>
                                <th class="col-md-2 text-center"> Acciones </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="text-center"> {{$user->id}} </td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->apellidos}}</td>
                                <td>{{$user->telefono}}</td>
                                <td>{{$user->email}}</td>
                                <td class = "td-actions text-center">
                                    
                                    <form method="post" action="{{ url('/admin/user/'.$user->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                        <a href="{{ url('/admin/user/'.$user->id.'/edit') }}"  rel="tooltip" title="Editar Acceso" class="btn btn-success btn-simple btn-xs">
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
                    {{$users->links() }}
                </div>
            </div>        
        </div>
    </div>
</div>

@include('footer.footer')
@endsection
