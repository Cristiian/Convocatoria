@extends('Convocatoria.Plantillas.template')

@section('head')
<title>Paso 5. Inscripción a la carrera.</title>
@stop

@section('left_bar')
<li tabindex="51"><a>asda</a></li>
@stop

@section('panel_principal')
<section aria-labelledby="cond">
    <ul style="list-style-type:none" role=presentation>
        <li>
            <div tabindex="2">
                <p>37. La inscripción se realizará en la Facultad, fecha y horario asignado en la Ficha de Inscripción. Para conocer los requisitos y procedimientos seleccionar el botón: <code>INSCRIPCIÓN</code></p>
            </div>
        </li>
        <li>
            <div tabindex="3">
                <p>38. Para inscribirse es obligatorio presentar los siguientes documentos:</p>
            </div>
            <ul style="list-style-type:none" role=presentation>
                <li>
                    <div tabindex="4">
                        <p>Ficha de Inscripción </p>
                    </div>
                </li>
                <li>
                    <div tabindex="5">
                        <p>Credencial para Examen e identificación oficial con fotografía </p>
                    </div>
                </li>
                <li>
                    <div tabindex="6">
                        <p>Original y fotocopia legible del Acta de Nacimiento </p>
                    </div>
                </li>
                <li>
                    <div tabindex="7">
                        <p>Comprobar Estudios Completos de Bachillerato, mediante: </p>
                    </div>
                    <ul style="list-style-type:none" role=presentation>
                        <li>
                            <div tabindex="8">
                                <p>Original y fotocopia del Certificado de Estudios Completos de Bachillerato. <code>Ver ejemplos.</code> </p>
                            </div>
                        </li>
                        <li>
                            <div tabindex="9">
                                <p>Original y fotocopia legible del Acta de Nacimiento </p>
                            </div>
                        </li>
                        <li>
                            <div tabindex="10">
                                <p>Oficio de Resolución de Revalidación de Estudios Completos de Bachillerato, los mexicanos y extranjeros que estudiaron en otro país. <code>Ver ejemplo. Ver Indicaciones. </code></p>
                            </div>
                        </li>
                        <li>
                            <div tabindex="11">
                                <p>Constancia actualizada de Estudios Completos de Bachillerato, según el formato establecido debidamente certificada por la autoridad educativa reconocida, únicamente para quienes estudian bachillerato en el actual periodo febrero-julio de 2014.<code>Ver ejemplos.</code>  </p>
                            </div>
                        </li>
                        <li>
                            <div tabindex="12">
                                <p>Estudiantes egresados de bachilleratos de otros estados deberán presentar documentos certificados por las autoridades educativas y gubernamentales de su entidad.</p>
                            </div>
                        </li>
                        <li>
                            <div tabindex="13">
                                <p>Estudiantes extranjeros, documentación que acredite su estancia legal en el país.</p>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </li>
        <li>
            <div tabindex="14">
                <p>39. Pagar los derechos de inscripción y cumplir con los requisitos establecidos por la Facultad. </p>
            </div>
        </li>
        <li>
            <div tabindex="15">
                <p>40. Bajo ninguna circunstancia se inscribirá a quien adeude una o más materias del bachillerato. </p>
            </div>
        </li>
        <li>
            <div tabindex="16">
                <p>41. NO se inscribirá a quien no entregue, en las fechas establecidas, los documentos mencionados en el punto 38 de esta Convocatoria.</p>
            </div>
        </li>

    </ul>
</section>

<section aria-labelledby="cond2">
    <input tabindex="17" id="chkb" type="checkbox" aria-describedby="cond2 chkbd" ><label for="chkb">Ir a consideraciones.</label><br>
</section>
@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se redireccioná a las consideraciones. </div>
@stop