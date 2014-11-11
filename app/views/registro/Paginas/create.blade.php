@extends('Registro.Plantillas.template')

@section('head')
<title>Registro de aspirantes</title>
@stop

@section('left_bar')
<li><a href="http://consultas.curp.gob.mx/CurpSP/">Obtener mi CURP</a></li>
@stop

@section('panel_principal')




<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'registro/create')) }}
<h2 tabindex="11">Datos del aspirante:</h2>
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input tabindex="12" id="nombre" name="nombre" class="form-control" type="text">

    <label for="apellido_paterno">Apellido paterno</label>
    <input tabindex="13" id="apellido_paterno" name="apellido_paterno" class="form-control" type="text">

    <label for="apellido_materno">Apellido materno</label>
    <input tabindex="14" id="apellido_materno" name="apellido_materno" class="form-control" type="text">

    <label for="curp">CURP</label>
    <input tabindex="15" id="curp" name="curp" class="form-control" type="text">

    <label for="fecha_de_nacimiento">Fecha de nacimiento</label>
    <input tabindex="16" id="fecha_de_nacimiento" name="fecha_de_nacimiento" class="form-control" type="text">

    <label for="email">Correo electrónico</label>
    <input tabindex="17" id="email" name="email" class="form-control" type="text">
</div>

<!--    datos de la dirección-->
<div class="form-group">
    <h2>Datos de domicilio</h2>
    
    <label for="calle">Calle</label>
    <input tabindex="18" id="calle" name="calle" class="form-control" type="text">
   
    <label for="numero">Número de casa</label>
    <input tabindex="19" id="numero" name="numero" type="number" class="form-control" id="numero_de_casa">
    
    <label for="colonia">Colonia</label>
    <input tabindex="20"id="colonia" name="colonia" class="form-control" type="text">
    
    <label for="ciudad">Ciudad</label>
    <input tabindex="21" id="ciudad" name="ciudad" class="form-control" type="text">
    
    {{ Form::label('estado', 'Estado') }}

    {{ Form::select('estado', array('-1' => 'Selecciona una estado', 
                '1' => 'Veracruz', 
                '2' => 'Yucatán', 
                '3' => 'Etc'), Input::old('carreraCombo'), array('class' => 'form-control','tabindex'=>'22')) }}
   
</div>




<div class="form-group">
    <h2>Selecciona una carrera</h2>
    {{ Form::label('carrera', 'Carrera') }}
    {{ Form::select('carrera', array('0' => 'Selecciona una carrera', 
                                    '1' => 'Informatica', 
                                    '2' => 'Economía', 
                                    '3' => 'Estadística'), Input::old('carreraCombo'), array('class' => 'form-control','tabindex'=>'23')) }}
</div>

{{ Form::submit('Registrar', array('class' => 'btn btn-primary btn-lg','tabindex'=>'24')) }}


{{ Form::close() }}



@stop

@section('right_bar')
<li><a href="http://consultas.curp.gob.mx/CurpSP/">Obtener mi CURP</a></li>
@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se le redireccionará a los lineamientos del paso 2. </div>
@stop