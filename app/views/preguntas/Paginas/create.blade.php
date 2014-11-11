@extends('preguntas.Plantillas.template')

@section('head')
<title>crear una pregunta</title>
@stop

@section('left_bar')
<li><a href="">XXX</a></li>
@stop

@section('panel_principal')




<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'preguntas/create')) }}
<h2 tabindex="11">Datos de la pregunta:</h2>
<div class="form-group">
    <label for="texto">Texto</label>
    <input tabindex="12" id="text" name="texto" class="form-control" type="text" required="">

    <label for="seccion">Seccion</label>
    <input tabindex="13" id="seccion" name="seccion" class="form-control" type="number" required="">

</div>
<br>
<br>
<br>
<div class="form-group">
    <h2>respuesta1</h2>
        
    <label for="inciso1"> inciso</label>
    <input tabindex="14" id="inciso1" name="inciso1" class="form-control" type="text">
    <label for="texto1">Respuesta 1</label>
    <input tabindex="14" id="texto1" name="texto1" class="form-control" type="text">
    <input id="r1c" name="r1c" tabindex="15" type="checkbox" value='1'><label for="r1c">Correcta</label><br>
</div>

<div class="form-group">
    <h2>respuesta2</h2>
    
    <label for="inciso2"> inciso</label>
    <input tabindex="14" id="inciso2" name="inciso2" class="form-control" type="text">
    <label for="texto2">Respuesta 2</label>
    <input tabindex="14" id="texto2" name="texto2" class="form-control" type="text">
    <input id="r2c" name="r2c" tabindex="15" type="checkbox" value='1'><label for="r2c">Correcta</label><br>
</div>

<div class="form-group">
    <h2>respuesta3</h2>
    
    <label for="inciso3"> inciso</label>
    <input tabindex="14" id="inciso3" name="inciso3" class="form-control" type="text">
    <label for="texto3">Respuesta 3</label>
    <input tabindex="14" id="texto3" name="texto3" class="form-control" type="text">
    <input id="r3c" name="r3c" tabindex="15" type="checkbox" value='1'><label for="r3c">Correcta</label><br>
</div>

<div class="form-group">
    <h2>respuesta4</h2>
    
    <label for="inciso4"> inciso</label>
    <input tabindex="14" id="inciso4" name="inciso4" class="form-control" type="text">
    <label for="texto4">Respuesta 4</label>
    <input tabindex="14" id="texto4" name="texto4" class="form-control" type="text">
    <input id="r4c" name="r4c" tabindex="15" type="checkbox" value='1'><label for="r4c">Correcta</label><br>
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