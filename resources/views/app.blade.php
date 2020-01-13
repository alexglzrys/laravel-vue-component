<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
                        <h1 class="text-center">Captura tus ideas</h1>
                        <div class="card mt-4">
                            <div class="card-header">
                                <h4>¿En qué estas pensando?</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="input-group input-group-sm mt-3 mb-3">
                                        <input type="text" name="description" class="form-control">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">Agregar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled">
                                    <li>
                                        <span class="text-muted mr-1"><em>Hace un momento</em></span>
                                        Mi nueva idea
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Main Template Vue -->

                </div>
            </div>
        </div>

        <!-- Scripts Compiled -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
