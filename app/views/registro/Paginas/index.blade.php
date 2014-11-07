@extends('Registro.Plantillas.template')

@section('head')
<title>Registrar solicitud</title>
@stop

@section('left_bar')

@stop

@section('panel_principal')
<h1>Advertencias sobre el registro</h1>

<?php 
        
        if (Auth::check()) {
            echo "ok";
        }  else {
            echo "not ok";
        }
        
        ?>

@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se le redireccionará a los lineamientos del paso 2. </div>
@stop