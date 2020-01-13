<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--  
            En versiones anteriores de Vue, era necesario inyectar el csrf_token en una
            etiqueta meta para inyectarla en las cabeceras HTTP de la petición de Axios
            mediante el uso de jQuery.
            Ahora esto no es necesario, ya que laravel generera el mismo token y lo guarda
            de forma implicita a través de una Cookie. La cual se envia en todas las peticiones
            al servidor.
        -->

        <title>Laravel - Vue Components</title>

        <!-- Fonts CDN -->
        <!-- Styles Compiled-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">

                    <!-- Main Template VueJS -->
                    <div id="app">
                        <idea></idea>
                    </div>
                    <!-- End Main Template Vue -->

                </div>
            </div>
        </div>

        <!-- Scripts Compiled -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
