@extends('preguntas.Plantillas.template')

@section('head')
<title>Editar una resuesta</title>
@stop

@section('left_bar')

@stop

@section('panel_principal')
<h1>Editar respuesta '{{ $respuesta->Textodelinciso }}'</h1>

{{ Form::model($respuesta, ['route' => ['respuesta.update', $respuesta->idRespuestas],'method' => 'put']) }}

<label for="inciso">Inciso</label>
<input tabindex="14" id="inciso" name="inciso" class="form-control" type="text" value="{{$respuesta->Inciso}}">
<label for="texto">Texto</label>
<input tabindex="14" id="texto" name="texto" class="form-control" type="text" value="{{$respuesta->Textodelinciso}}">

{{ $respuesta->correcto}}


@if($respuesta->correcto=="1")

<input id="r1c" name="r1c" tabindex="15" checked="true" type="checkbox" value='1'><label for="r1c">Correcta</label><br>
@endif

@if($respuesta->correcto=='0')
<input id="r1c" name="r1c" tabindex="15" checked="false" type="checkbox" value='1'><label for="r1c">Correcta</label><br>
@endif


{{ Form::submit('Registrar', array('class' => 'btn btn-primary btn-lg','tabindex'=>'24')) }}

{{ Form::close() }}






@stop



@section('right_bar')
<li><a href="http://consultas.curp.gob.mx/CurpSP/">Obtener mi CURP</a></li>
@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se le redireccionará a los lineamientos del paso 2. </div>
@stop