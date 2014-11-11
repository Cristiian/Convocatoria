@extends('preguntas.Plantillas.template')

@section('head')
<title>Preguntas en la base de datos</title>
@stop

@section('left_bar')

@stop

@section('panel_principal')
<h1>Editar pregunta '{{ $pregunta->TextoPregunta }}'</h1>



{{ Form::model($pregunta, ['route' => ['pregunta.update', $pregunta->idPreguntas],'method' => 'put']) }}


<label for="pregunta"> Pregunta</label>
<input tabindex="14" id="pregunta" name="texto" class="form-control" type="text" value="{{$pregunta->TextoPregunta}}">


<label for="Seccion">seccion</label>
<input tabindex="14" id="texto4" name="seccion" class="form-control" type="text" value="{{$pregunta->Seccion}}">


{{ Form::submit('Registrar', array('class' => 'btn btn-primary btn-lg','tabindex'=>'24')) }}

{{ Form::close() }}


@stop



@section('right_bar')
<li><a href="http://consultas.curp.gob.mx/CurpSP/">Obtener mi CURP</a></li>
@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se le redireccionará a los lineamientos del paso 2. </div>
@stop