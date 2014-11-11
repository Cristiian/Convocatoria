@extends('Convocatoria.Plantillas.template')

@section('head')
<title>Consideraciones importantes</title>
@stop

@section('left_bar')
<li tabindex="51"><a>asda</a></li>
@stop

@section('panel_principal')

<section aria-labelledby="cond">
    <ul style="list-style-type:none" role=presentation>
        <li>
            <h1 aria-describedby=" cond sec1" >
                <div tabindex="2" >
                    <p >CONSIDERACIONES IMPORTANTES PARA EL REGISTRO:</p>
                </div>
            </h1>
        </li>
        <li>
            <div tabindex="3">
                <p>42. Los aspirantes que hayan causado baja definitiva en una carrera en la Universidad Veracruzana, no podrán solicitar ingreso a la misma carrera. </p>
            </div>
        </li>
        <li>
            <div tabindex="4">
                <p>43. La Universidad Veracruzana se reserva el derecho de confirmar los datos de cualquier documento solicitado como: CURP, foto, fecha de nacimiento, nombre, Certificado de Bachillerato, etc. </p>
            </div>
        </li>
        <li>
            <div tabindex="5">
                <p>44. Costo del examen, aspirantes:</p>
            </div>
            <ul style="list-style-type:none" role=presentation>
                <li>
                    <div tabindex="6">
                        <p>Nacionales $638.00 (Seiscientos treinta y ocho pesos 00/100 MN). </p>
                    </div>
                </li>
                <li>
                    <div tabindex="7">
                        <p>Extranjeros: $1,913.00 (Un mil novecientos trece pesos 00/100 MN). </p>
                    </div>
                </li>
                <li>
                    <div tabindex="8">
                        <p>Con derecho a condonación. <code>Ver trámite.</code></p>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <div tabindex="9">
                <p>45. Efectuado el pago NO se hará ninguna devolución. Es responsabilidad del interesado realizar correctamente el registro y concluirlo según las fechas establecidas en la presente CONVOCATORIA. </p>
            </div>
        </li>
    </ul>

    <!-- segunda parte del documento -->
    <ul style="list-style-type:none" role=presentation>
        <li>
            <h1 aria-describedby=" cond sec1" >
                <div tabindex="10" >
                    <p >CONSIDERACIONES IMPORTANTES PARA LA INSCRIPCION A LA CARRERA:</p>
                </div>
            </h1>
        </li>

        <li>
            <div tabindex="11">
                <p>46. Los aspirantes a la Universidad Veracruzana Intercultural (UVI) deben cubrir requisitos específicos: <code> http://www.uv.mx/uvi/requisitos </code></p>
            </div>
        </li>
        <li>

        <li>
            <div tabindex="12">
                <p>47. Los aspirantes con derecho a inscripción que hayan realizado estudios de bachillerato fuera del país, deberán entregar: oficio de Resolución de Revalidación de Estudios Completos de Bachillerato <code>(ejemplo), (ver Solicitud).</code> </p>
            </div>
        </li>


        <div tabindex="13">
            <p>48. Los aspirantes a la Enseñanza del Inglés (Modalidad Virtual) cubrirán además alguna de las certificaciones de lengua inglesa indicadas en:  <code>http://www.uv.mx/inglesvirtual/aspirantes/requisitos/</code></p>
        </div>
        <ul style="list-style-type:none" role=presentation>
            <li>
                <div tabindex="14">
                    <p>En caso de NO contar con alguna de las anteriores, acudir a la Entidad Académica de Idiomas.</p>
                </div>
            </li>
        </ul>
        </li>
        <li>
            <div tabindex="15">
                <p>49. Para Carreras de Artes Ciclo Preparatorio (Danza y Música) presentar:  </p>
            </div>
            <ul style="list-style-type:none" role=presentation>
                <li>
                    <div tabindex="16">
                        <p>Fotocopia del Certificado de Secundaria para egresados antes de 2014. </p>
                    </div>
                </li>
                <li>
                    <div tabindex="17">
                        <p>Quienes egresarán de la secundaria en julio de 2014 presentarán: Constancia Oficial de Estudios concluidos de secundaria, certificada por una autoridad educativa reconocida. </p>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <div tabindex="18">
                <p>50. Para el Ciclo de Iniciación de Música: Constancia Oficial de Estudios de Educación Básica del grado que estén cursando.</p>
            </div>
        </li>
    </ul>

    <!-- tercera parte del documento -->
    <ul style="list-style-type:none" role=presentation>
        <li>
            <h1 aria-describedby=" cond sec1" >
                <div tabindex="19" >
                    <p >CONSIDERACIONES IMPORTANTES SOBRE LA APLIACION DE EXAMENES:</p>
                </div>
            </h1>
        </li>
        
        <li>
            <div tabindex="20">
                <p>51. La Universidad Veracruzana se reserva el derecho de confirmar la identidad de los aspirantes.</p>
            </div>
        </li>
        <li>
            <div tabindex="21">
                <p>52. Para Licenciatura y TSU se aplica el EXANI-II, para Nivel Preparatorio en Artes el EXANI-I. </p>
            </div>
        </li>
        <li>
            <div tabindex="22">
                <p>53. Los asuntos no previstos en la presente Convocatoria serán resueltos por la Comisión Técnico Académica de Ingreso y Escolaridad. </p>
            </div>
        </li>
        
    </ul>

</section>

<section aria-labelledby="cond2">
    <input tabindex="23" id="chkb" type="checkbox" aria-describedby="cond2 chkbd" ><label for="chkb">Ir a la pagina de registro.</label><br>
</section>
@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se redireccioná a la página de registro. </div>
@stop