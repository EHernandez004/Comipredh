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

                <form method="post" action="{{ url('/admin/user/'.$users->id.'/edit') }}">    
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{$users->name}}">
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" value="{{$users->apellidos}}">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Telefono</label>
                            <input type="text" class="form-control" name="telefono" value="{{$users->telefono}}">
                        </div>
                    </div>
                    
                    <div class="col-sm-5">
                        <div class="form-group label-floating">
                            <label class="control-label">Correo</label>
                            <input type="email" class="form-control" name="email" value="{{$users->email}}">
                        </div>
                    </div>
                <br><br><br><br><br><br><br><br>

                    <button class="btn btn-info">Guardar Cambios</button>
                    <a href="{{ url('/admin/user') }}" class="btn btn-default">Cancelar</a>
                </form>    
            </div>
        </div>
    </div>
</div>


@include('footer.footer')
@endsection