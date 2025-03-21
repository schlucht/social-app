<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{secure_asset('css/style.css')}}">
        <title>JAGOLO</title>
    </head>
    <body class="w-full bg-gray-200 p-5 m-auto">
        <x-header />
        <main>
            {{ $slot }}
        </main>
        <x-footer />
    </body>
</html>
