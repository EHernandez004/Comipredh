@extends('layouts.app')

@section('title','Index')
@section('body-class','landing-page')

@section('content')
 <div class="wrapper">
        <div class="header header-filter" style="background-image: url('{{asset('img/img.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">Buscar Trabajo Nunca fue más Fácil</h1>
                        
                        <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input type="buscador" class="form-control form-control-lg" placeholder="Buscar Puesto ó Área">
                        </div>
                        <div class="col-12 col-md-3">
                            <button type="buscar" class="btn btn-info">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        @include('footer.footer')
    </div>
@endsection
