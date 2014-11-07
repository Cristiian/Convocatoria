@extends('Registro.Plantillas.template')

@section('head')
<title>Subir foto</title>
@stop

@section('left_bar')

@stop

@section('panel_principal')
<h1>Advertencias sobre la foto</h1>

<div class="form">


{{ Form::open(array('url'=>'registro/upload','files'=>true)) }}
  
  {{ Form::label('file','File',array('id'=>'','class'=>'')) }}
  {{ Form::file('file','',array('id'=>'','class'=>'')) }}
  <br/>
  <!-- submit buttons -->
  {{ Form::submit('Save',array('id'=>'','class'=>'btn btn-primary')) }}
  
  <!-- reset buttons -->
  {{ Form::reset('Reset') }}
  
  {{ Form::close() }}


</div>    


@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se le redireccionará a los lineamientos del paso 2. </div>
@stop