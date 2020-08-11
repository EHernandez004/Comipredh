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

@include('footer.footer')
@endsection