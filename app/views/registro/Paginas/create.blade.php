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
<h1>Datos del aspirante:</h1>
<div class="form-group">
    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('apellido_paterno', 'Apellido paterno') }}
    {{ Form::text('apellido_paterno', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('apellido_materno', 'Apellido materno') }}
    {{ Form::text('apellido_materno', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('curp', 'CURP') }}
    {{ Form::text('curp', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('fecha_de_nacimiento', 'Fecha de nacimiento') }}
    {{ Form::text('fecha_de_nacimiento', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
</div>


<!--    datos de la dirección-->
<div class="form-group">
    <h2>Datos de domicilio</h2>
    {{ Form::label('calle', 'Calle') }}
    {{ Form::text('calle', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('numero_de_casa', 'Número de casa') }}
    <input type="number" class="form-control" id="numero_de_casa">
    
</div>

<div class="form-group">
    {{ Form::label('colonia', 'Colonia') }}
    {{ Form::text('colonia', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('ciudad', 'Ciudad') }}
    {{ Form::text('ciudad', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('estado', 'Estado') }}
    {{ Form::select('estado', array('0' => 'Selecciona una estado', '1' => 'Veracruz', '2' => 'Yucatán', '3' => 'Etc'), Input::old('carreraCombo'), array('class' => 'form-control')) }}
</div>



<div class="form-group">
    <h2>Selecciona una carrera</h2>
    {{ Form::label('carrera', 'Carrera') }}
    {{ Form::select('carrera', array('0' => 'Selecciona una carrera', '1' => 'Informatica', '2' => 'Economía', '3' => 'Estadística'), Input::old('carreraCombo'), array('class' => 'form-control')) }}
</div>

{{ Form::submit('Registrar', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}



@stop

@section('right_bar')
<li><a href="http://consultas.curp.gob.mx/CurpSP/">Obtener mi CURP</a></li>
@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se le redireccionará a los lineamientos del paso 2. </div>
@stop