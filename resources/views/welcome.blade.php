<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>shapes quiz</title>
    </head>
    <body>
        <div id="app"></div>

        <script src="{{ mix('/js/app.js') }}" async></script>
        <!-- <script src="{{ mix('/css/app.css') }}" async></script> -->
    </body>
</html>
