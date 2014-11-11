@extends('Convocatoria.Plantillas.Index_template')

@section('head')
<title>Convocatoria de ingreso a la universidad 2015.</title>
@stop

@section('panel_principal')
<section aria-labelledby="cond">
    <ul style="list-style-type:none" role=presentation>
        <li>
            <h1 aria-describedby=" cond sec1" >
                <div tabindex="1" >
                    <p >Procedimiento de inscripción.</p>
                </div>
            </h1>
        </li>		

        <li >
            <div tabindex="2">
                <p>La Universidad Veracruzana convoca a las personas interesadas en cursar una carrera de nivel Licenciatura y Técnico	Superior Universitario, en las modalidades Escolarizada, Abierta, a Distancia y Virtual, a realizar los trámites de registro</p>
            </div>
        </li>

        <li >
            <div tabindex="3">
                <p>El proceso consta de 5 pasos:</p>
            </div>
        </li>

        <li >
            <div tabindex="4">
                <p>Paso 1: Solicitar registro para examen.</p>
            </div>
        </li>

        <li >
            <div tabindex="5">
                <p>Paso 2: Completar el registro.</p>
            </div>
        </li>

        <li >
            <div tabindex="6">
                <p>Paso 3: Aplicación del examen de ingreso los dias 18 y 19 de Mayo.</p>
            </div>
        </li>

        <li >
            <div tabindex="7">
                <p>Paso 4: Resultados del examen de ingreso.</p>
            </div>
        </li>

        <li >
            <div tabindex="8">
                <p>Paso 5: Inscripción a la carrera.</p>
            </div>
        </li>

    </ul>
</section>

<section aria-labelledby="cond2">
    <input id="chkb" tabindex="8" type="checkbox" aria-describedby="cond2 chkbdI" ><label for="chkb">Ir al paso 1</label><br>
</section>

@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbdI" name="Adesc">Al marcar esta casilla se le redireccionará a los lineamientos del paso 1. </div>

@stop