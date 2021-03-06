<!doctype html>
<html>
    <head>
        @include('Convocatoria.Includes.head')
        @section('head')
        @show

    </head>
    <body id="body" > <!--tabindex="0" aria-describedby="bodyd"-->
        <div class="container" >
            <div class="row">
                <!-- inicio panel izquierdo -->
                <div class="col-md-2"> <!-- ajustar ancho del panel -->
                    <div class="well">
                        <ul class="nav " role="presentation">
                            <li class="nav-header" tabindex="50">Acceso rápido</li>
                            @section('left_bar')
                            @show
                        </ul>
                    </div>
                    <!-- se debe agregar elementos <li> desde la pag. principal -->
                </div>
                <!-- fin panel izquierdo -->

                <!-- inicio panel principal -->
                <div class="col-md-8"> <!-- ajustar ancho del panel principal-->
                    <div><!--class="jumbotron" -->
                        @section('panel_principal')
                        @show
                    </div>
                </div>
                
                
                <!-- fin panel principal -->

                <!-- inicio panel derecho -->
                <div class="col-md-2"> <!-- ajustar ancho del panel -->
                    <div class="well">
                        @include('Convocatoria.includes.right_bar')
                    </div>
                </div>
                <!-- fin panel derecho -->
            </div>
        </div>
        <!-- area de descripciones:  -->
        @include('Convocatoria.includes.AriaDesc')
        @section('AriaDivs')
        @show
        <!-- fin area de descripciones:  -->
    </body>
</html>