@extends('Convocatoria.Plantillas.template')

@section('head')
<title>Paso 1. Solicitud de registro para el examen.</title>
@stop

@section('left_bar')
<li><a>asda</a></li>
@stop

@section('panel_principal')

<section aria-labelledby="cond">
    <ul style="list-style-type:none" role=presentation>			
        <li>
            <h1 aria-describedby=" cond sec1" >
                <div tabindex="1" >
                    <p >CONDICIONES BÁSICAS:</p>
                </div>
            </h1>
        </li>


        <li >
            <div tabindex="2">
                <p>1. El registro será sólo por Internet y se realizará del 23 de febrero al 23 de marzo de 2014 en el siguiente: </p>
            </div>
        </li>
        <li>
            <div tabindex="3">
                <p>2. Sólo los aspirantes a una carrera del Área de Artes podrán solicitar otra. La cual podrá ser de Artes o de otra Área Académica.</p>
            </div>
        </li>
    </ul>

    <!-- parte dos del documento-->

    <ul style="list-style-type:none" role=presentation>
        <li>
            <h1 aria-describedby=" cond sec2" >
                <div tabindex="4" >
                    <p >PARA REGISTRARSE:</p>
                </div>
            </h1>
        </li>

        <li>
            <div tabindex="5">
                <p>3. Leer completa esta CONVOCATORIA y aceptar las condiciones.</p>
            </div>
        </li>

        <li>
            <div tabindex="6">
                <p>4. En la pagina de registro, deberas Ingresar tu CURP y seleccionar una carrera.</p>
            </div>
        </li>

        <li>
            <div tabindex="7">
                <p>5. Imprimir el Folio UV. Guardar su Folio UV y la Contraseña que registró. Durante todo el proceso es la clave personal de acceso al sistema.</p>
            </div>
        </li>

        <li>
            <div tabindex="8">
                <p>6. Ingresar datos escolares y personales.</p>
            </div>
        </li>

        <li>
            <div tabindex="9">
                <p>7. Contestar el cuestionario de contexto.</p>
            </div>
        </li>

        <li>
            <div tabindex="10">
                <p>8. Imprimir la Orden de Pago.</p>
            </div>
        </li>

    </ul>
</section>
<section aria-labelledby="cond2">
    <input id="chkb" tabindex="11" type="checkbox" aria-describedby="cond2 chkbd" ><label for="chkb">Ir al paso 2</label><br>
</section>
@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se le redireccionará a los lineamientos del paso 2. </div>
@stop