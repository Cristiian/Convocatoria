<!doctype html>
<html>
    <head>
        @include('Convocatoria.includes.head')
        @section('head')
        @show

    </head>
    <body id="body" tabindex="0" aria-describedby="bodyd">
        <div class="container" >
            <div class="row">
                <!-- inicio panel izquierdo -->
                
                <!-- fin panel izquierdo -->

                <!-- inicio panel principal -->
                <div class="col-md-9"> <!-- ajustar ancho del panel principal-->
                    <div > <!--class="jumbotron" -->
                        @section('panel_principal')
                        @show
                    </div>
                </div>
                <!-- fin panel principal -->

                <!-- inicio panel derecho -->
                <div class="col-md-3"> <!-- ajustar ancho del panel -->
                    <div class="well">
                        
                        @include('convocatoria.includes.right_bar')
                        
                        
                    </div>
                </div>
                <!-- fin panel derecho -->
            </div>
        </div>
        <!-- area de descripciones:  -->
        @include('convocatoria.includes.AriaDesc')
        @section('AriaDivs')
        @show
        <!-- fin area de descripciones:  -->
    </body>
</html>