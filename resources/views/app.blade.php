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
