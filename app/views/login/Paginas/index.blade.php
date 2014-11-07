@extends('login.Plantillas.template')

@section('head')
<title>Iniciar sesión</title>
@stop

@section('left_bar')

@stop

@section('panel_principal')

@if(Session::has('mensaje_error'))
    <div class="alert-box success">
        <h2>{{ Session::get('mensaje_error') }}</h2>
    </div>
@endif

{{ Form::open(array('url' => '/login')) }}
    <h2 class="form-signin-heading">Por favor inicia sesión</h2>
    <input id="login" name="login" class="form-control" placeholder="Nombre de usuario" required="" autofocus="" type="text">
    <input id="password" name="password" class="form-control" placeholder="Password" required="" type="password">
    <div class="checkbox">
        <label>
            
            <input name="remember-me" value="true" type="checkbox"> recordarme
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
{{ Form::close() }}



@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se le redireccionará a los lineamientos del paso 2. </div>
@stop