<!doctype html>
<html>
    <head>
        @include('Examen.Includes.head')
        @section('head')
        @show

    </head>
    <body id="body" tabindex="0" aria-describedby="bodyd">
        <div class="container" >
            
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('#') }}">Examen</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('#') }}">Registrarse</a></li>
                    <li><a href="{{ URL::to('#') }}">Subir la foto</a>
                </ul>
            </nav>
            
            <div class="row">
                <!-- inicio panel izquierdo -->
                <div class="col-md-2"> <!-- ajustar ancho del panel -->
                    <div class="well">
                        <ul class="nav ">
                            <li class="nav-header">Acceso rápido</li>
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
                        @include('Examen.includes.right_bar')
                    </div>
                </div>
                <!-- fin panel derecho -->
            </div>
        </div>
        <!-- area de descripciones:  -->
        @include('Examen.includes.AriaDesc')
        @section('AriaDivs')
        @show
        <!-- fin area de descripciones:  -->
    </body>
</html>