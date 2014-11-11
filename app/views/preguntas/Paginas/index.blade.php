@extends('preguntas.Plantillas.template')

@section('head')
<title>Preguntas en la base de datos</title>
@stop

@section('left_bar')

@stop

@section('panel_principal')
<h1>preguntas disponibles</h1>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Texto</td>
            <td>Seccion</td>
            <td>Actions</td>
            <td>respuestas</td>
        </tr>
    </thead>
    <tbody>
        @foreach($preguntas as $key => $value)
        <tr>
            <td>{{ $value->idPreguntas }}</td>
            <td>{{ $value->TextoPregunta }}</td>
            <td>{{ $value->Seccion }}</td>


            <!-- we will also add show, edit, and delete buttons -->
            <td>
                {{ Form::open(['route' => ['preguntas.destroy', $value->idPreguntas], 'method' => 'delete']) }}
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                {{ Form::close() }}

                <a class="btn btn-info btn-sm" href="{{ URL::to('preguntas/edit', $value->idPreguntas) }}">Edit</a>

            </td>

            <td><!--respuestas-->
                @foreach($respuestas as $key => $value1)
                @if($value1->Preguntas_idPreguntas==$value->idPreguntas)

                id: '{{$value1->idRespuestas}}' inciso: '{{$value1->Inciso}}' texto: ' {{$value1->Textodelinciso}}' correcta: '{{$value1->correcto}}'<br>

                {{ Form::open(['route' => ['respuesta.destroy', $value1->idRespuestas], 'method' => 'delete']) }}
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                <a class="btn btn-info btn-sm" href="{{ URL::to('respuestas/edit', $value1->idRespuestas) }}">Edit</a>
                {{ Form::close() }}

                @endif
                @endforeach
            </td>
        </tr>

        @endforeach

    </tbody>
</table>

@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se le redireccionará a los lineamientos del paso 2. </div>
@stop