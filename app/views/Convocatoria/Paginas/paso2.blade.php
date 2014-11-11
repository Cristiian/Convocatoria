@extends('Convocatoria.Plantillas.template')

@section('head')
<title>Paso 2. Completar el registro.</title>
@stop

@section('left_bar')
<li tabindex="51"><a>Subir la foto</a></li>
<li tabindex="52"><a>Imprimir la credencial</a></li>
@stop

@section('panel_principal')
<section aria-labelledby="cond">
    <ul style="list-style-type:none" role=presentation>
        <li>
            <h1 aria-describedby=" cond sec2" >
                <div tabindex="2" >
                    <p >SUBIR LA FOTO:</p>
                </div>
            </h1>
        </li>

        <li>
            <div tabindex="3">
                <p>9. Subir la foto digital a partir del 27 de febrero al 20 de abril.</p>
            </div>
        </li>

        <li>
            <div tabindex="4">
                <p>10. Ingresar al portal dos días hábiles después de haber pagado. </p>
            </div>
            <ul style="list-style-type:none" role=presentation>
                <li>
                    <div tabindex="5">
                        <p>Hacer clic en: COMPLETAR REGISTRO</p>
                    </div>
                </li>

                <li>
                    <div tabindex="6">
                        <p>Usar Folio UV, Contraseña y hacer clic en el botón: SUBIR MI FOTO</p>
                    </div>
                </li>

                <li>
                    <div tabindex="7">
                        <p>Seguir las instrucciones hasta terminar.</p>
                    </div>
                </li>
            </ul>
        </li>

        <li>
            <div tabindex="8">
                <p>11. La foto será revisada. Consultar en el portal dos días después si fue aceptada. Si fue rechazada se deberá subir una nueva foto.</p>
            </div>
        </li>

        <li>
            <div tabindex="9">
                <p>12. <code>Ver ejemplo en: CÓMO HACER LA FOTO.</code>  La foto digital debe ser:</p>
            </div>
            <ul style="list-style-type:none" role=presentation>
                <li>
                    <div tabindex="10">
                        <p>Dimensiones en píxeles: ancho 480  por alto 640.</p>
                    </div>
                </li>

                <li>
                    <div tabindex="11">
                        <p>A color, fondo blanco y ropa negra.</p>
                    </div>
                </li>

                <li>
                    <div tabindex="12">
                        <p>De la cara, de frente y sin lentes.</p>
                    </div>
                </li>

                <li>
                    <div tabindex="13">
                        <p>Cabeza, frente y orejas descubiertas.</p>
                    </div>
                </li>

                <li>
                    <div tabindex="14">
                        <p>Sin sombra y sin fecha.</p>
                    </div>
                </li>

                <li>
                    <div tabindex="15">
                        <p>Sin retocar y tomada recientemente en 2014.</p>
                    </div>
                </li>

            </ul>
        </li>
        <li>
            <div tabindex="16">
                <p>13. A partir del 11 de abril hasta el 1 de mayo se podrá imprimir la credencial. Sólo si la foto fue aceptada.</p>
            </div>
        </li>

        <li>
            <div tabindex="17">
                <p>14. Con la impresión de la Credencial para Examen concluye el registro.</p>
            </div>
        </li>

        <li>
            <div tabindex="18">
                <p>15. La Credencial es el documento que da derecho a presentar el examen.</p>
            </div>
        </li>

    </ul>
</section>



<section aria-labelledby="cond2">
    <input tabindex="19"id="chkb" type="checkbox" aria-describedby="cond2 chkbd" ><label for="chkb">Ir al paso 3</label><br>
</section>
@stop

@section('AriaDivs')
<div aria-hidden="true" id="chkbd" name="Adesc">Al marcar esta casilla se le redireccionará a los lineamientos del paso 3. </div>
@stop