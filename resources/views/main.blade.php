<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="PROMT - Promgrama de Operaciones en Media Tensión">
        <meta name="author" content="CND">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image">

        <title>PROMT</title>

        @vite('resources/css/app.scss')
        @livewireStyles()
        @vite('resources/css/adminkit.css')
    </head>

    <div class="wrapper">
        @include('sidebar')
        <div class="main">
            @include('header')
            <body>
                @yield('content')
            </body>
            @include('footer')
        </div>

        @yield('modal')

        {{--@vite('resources/js/app.js')--}}
        @vite('resources/js/adminkit.js')
        @livewireScripts()
    </div>
</html>
