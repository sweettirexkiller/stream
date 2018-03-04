<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css" type="text/css">

        <title>My App</title>
    </head>
    <body>

        <div id="app">

            @include('layouts.header')

            <section class="section">
                <div class="container">
                    <router-view></router-view>
                </div>
            </section>


        </div>

        <script src="/js/app.js "></script>
    </body>
</html>
