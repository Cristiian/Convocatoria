@extends('Convocatoria.Plantillas.template')

@section('head')
<title>Paso 3. Aplicación del examen de ingreso.</title>
@stop

@section('left_bar')
<li><a>asda</a></li>
@stop

@section('panel_principal')
<section aria-labelledby="cond">
    <ul role=presentation style="list-style-type:none">
        <li>
            <div tabindex="1">
                <p>16. Presentarse en la sede del examen, el día y la hora indicados en la Credencial para Examen.</p>
            </div>
        </li>
        <li>
            <div tabindex="2">
                <p>17. Para ingresar es obligatorio presentar la Credencial para Examen junto con una identificación oficial con fotografía (credencial de elector, cartilla de servicio militar nacional, credencial escolar, constancia o certificado de estudios con fotografía, pasaporte, licencia de conducir).</p>
            </div>
        </li>
        <li>
            <div tabindex="3">
                <p>18. Para ver la ubicación de la sede ingresar al Portal en el botón: <code>SEDES DEL EXAMEN</code> </p>
            </div>
        </li>
        <li>
            <div tabindex="4">
                <p>19. No se podrá presentar el examen en una sede, día y hora diferente a lo indicado en la Credencial.</p>
            </div>
        </li>
        <li>
            <div tabindex="5">
                <p>20. Además del examen (EXANI I o EXANI II), deben presentar un Examen Especial los aspirantes a: </p>
            </div>
            <ul role=presentation>
                <li>
                    <div tabindex="6">
                        <p>Educación Física</p>
                    </div>
                </li>
                <li>
                    <div tabindex="7">
                        <p>Técnico Histotecnólogo Embalsamador</p>
                    </div>
                </li>
                <li>
                    <div tabindex="8">
                        <p>Área de Artes</p>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <div tabindex="9">
                <p>21. Las condiciones, sedes y fechas del Examen Especial se podrán consultar: GUÍA DE EXAMEN / Examen Especial </p>
            </div>
        </li>
        <li>
            <div tabindex="10">
                <p>22. Presentar examen a dos carreras anulará ambos exámenes y el derecho a la inscripción. Sólo los aspirantes a una carrera de Artes podrán elegir otra.</p>
            </div>
        </li>
    </ul>
</section>


<section aria-labelledby="cond2">
    <input id="chkb" type="checkbox" aria-describedby="cond2 chkbd" ><label for="chkb">Ir al paso 4</label><br>
</section>
@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se le redireccionará a los lineamientos del paso 4. </div>
@stop