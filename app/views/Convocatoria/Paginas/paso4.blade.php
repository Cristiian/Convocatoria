@extends('Convocatoria.Plantillas.template')

@section('head')
<title>Paso 4. Resultados del examen de ingreso.</title>
@stop

@section('left_bar')
<li tabindex="51"><a>ver resultados del examen</a></li>
@stop

@section('panel_principal')
<section aria-labelledby="cond">
    <ul style="list-style-type:none" role=presentation>
        <li>
            <h1 aria-describedby=" cond sec1" >
                <div tabindex="2" >
                    <p >PRIMERA LISTA:</p>
                </div>
            </h1>
        </li>

        <li>
            <div tabindex="3">
                <p>23. Los resultados se publicarán el 9 de junio de 2014 y se podrán consultar desde el Portal en el botón: <code>RESULTADOS</code></p>
            </div>
        </li>
        <li>
            <div tabindex="4">
                <p>24. Se cancelará el derecho a inscripción a los aspirantes que hayan causado baja definitiva en la misma carrera solicitada en la Universidad Veracruzana.</p>
            </div>
        </li>
        <li>
            <div tabindex="5">
                <p>25. Los aspirantes a cada carrera se ordenarán de forma descendente en función del puntaje obtenido en el examen, para las carreras de Histotecnólogo Embalsamador, Educación Física y del área de Artes se considerará además los Exámenes Especiales.</p>
            </div>
        </li>
        <li>
            <div tabindex="6">
                <p>26. En ese orden se asignará el derecho a inscripción hasta completar el número de lugares disponibles en cada carrera , publicados en la Convocatoria ver: CARRERAS.</p>
            </div>
        </li>
        <li>
            <div tabindex="7">
                <p>27. Una vez realizado el proceso de inscripción se verificará el número de aspirantes con derecho que se inscribieron y se establecerá el número de lugares que se asignarán por corrimiento.</p>
            </div>
        </li>
    </ul>

    <!-- segunda parte del documento -->
    <ul style="list-style-type:none" role=presentation>
        <li>
            <h1 aria-describedby=" cond sec2" >
                <div tabindex="8" >
                    <p >CORRIMIENTO:</p>
                </div>
            </h1>
        </li>
        <li>
            <div tabindex="9">
                <p>28. Se publicará en el Portal la lista de quienes teniendo derecho no se inscribieron y el total de lugares no ocupados.</p>
            </div>
        </li>
        <li>
            <div tabindex="10">
                <p>29. Los lugares no ocupados se asignarán en estricto orden descendente, por corrimiento, a los aspirantes de la misma carrera que en primera lista no obtuvieron derecho a inscripción.</p>
            </div>
        </li>
        <li>
            <div tabindex="11">
                <p>30. Para participar por un lugar de corrimiento es obligatorio realizar una solicitud en línea, procedimiento que posteriormente se dará a conocer en este portal.</p>
            </div>
        </li>
        <li>
            <div tabindex="12">
                <p>31. Para participar por un lugar de corrimiento es obligatorio realizar una solicitud en línea, procedimiento que posteriormente se dará a conocer en este portal.</p>
            </div>
        </li>
    </ul>

    <!-- tercera parte del documento -->
    <ul style="list-style-type:none" role=presentation>
        <li>
            <h1 aria-describedby=" cond sec3" >
                <div tabindex="13" >
                    <p >VACANTES:</p>
                </div>
            </h1>
        </li>
        <li>
            <div tabindex="14">
                <p>32. La lista de lugares vacantes es el resultado de lugares no ocupados en corrimiento más aquellos lugares disponibles por que la oferta fue superior a la demanda. Dicha lista se publicará en el Portal.</p>
            </div>
        </li>
        <li>
            <div tabindex="15">
                <p>33. Se cancelará el derecho a inscripción a los aspirantes que hayan causado baja definitiva en la misma carrera solicitada durante el Proceso de Vacantes en la Universidad Veracruzana.</p>
            </div>
        </li>
        <li>
            <div tabindex="16">
                <p>34. Los lugares vacantes se asignarán en estricto orden descendente de acuerdo a la calificación obtenida en el examen.</p>
            </div>
        </li>
        <li>
            <div tabindex="17">
                <p>35. Los aspirantes no inscritos podrán solicitar un lugar vacante de la misma región y de la misma área académica de la carrera elegida originalmente.</p>
            </div>
        </li>
        <li>
            <div tabindex="18">
                <p>36. Para participar por un lugar vacante es obligatorio realizar una solicitud en línea, procedimiento que posteriormente se dará a conocer en este portal.</p>
            </div>
        </li>
    </ul>
</section>

<section aria-labelledby="cond2">
    <input tabindex="19" id="chkb" type="checkbox" aria-describedby="cond2 chkbd" ><label for="chkb">Ir al paso 5</label><br>
</section>

@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se redireccioná a los lineamientos del paso 5. </div>
@stop