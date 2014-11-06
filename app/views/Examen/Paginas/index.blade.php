@extends('Examen.Plantillas.template')

@section('head')
<title>Registro de aspirantes</title>
@stop

@section('left_bar')

@stop

@section('panel_principal')
<h1>Registrados</h1>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Nerd Level</td>
            <td>Actions</td>
        </tr>
    </thead>
</table>

@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se le redireccionará a los lineamientos del paso 2. </div>
@stop