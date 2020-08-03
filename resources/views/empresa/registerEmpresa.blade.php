@extends('layouts.app')

@section('title', 'Registra Empresa')
@section('body-class','signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/img.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="header header-primary text-center">
                            <h4>Registrate</h4>
                        </div>
                        
                        <div class="content">
                            <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>

                               <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Nombre">

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="input-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                                <span class="input-group-addon">
                                    <i class="material-icons">people</i>
                                </span>

                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required placeholder="Apellidos">

                                @if ($errors->has('apellidos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="input-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                <span class="input-group-addon">
                                    <i class="material-icons">phone</i>
                                </span>

                            
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required placeholder="Telefono (55-1234-5678)">

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                
                                <input id="email" type="email" class="form-control" name="email" required autofocus placeholder="alguien@comipredh.com">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña...">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>    
                                </span>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar Contraseña...">
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-info">
                                        Registrarse
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
