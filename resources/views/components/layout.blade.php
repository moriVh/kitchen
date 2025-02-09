<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kitchen Pi</title>


            @vite(['resources/css/app.css', 'resources/js/app.js'])
   
    </head>
    <body class="h-screen flex items-center justify-center ">
        {{ $slot }}
    </body>
</html>
