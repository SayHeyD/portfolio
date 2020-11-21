<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="Welcome to my portfolio website. Feel free to explore, maybe you will even find some secrets."/>

        <meta property="og:title" content="Portfolio - David Docampo" />
        <meta property="og:description" content="Welcome to my portfolio website. Feel free to explore, maybe you will even find some secrets.">
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ env('APP_URL') }}" />
        <meta property="og:image" content="{{ asset('img/david-docampo-logo.png') }}" />
        <meta property="og:image:alt" content="The logo of the David Docampo portfolio Website"/>
        <meta property="og:image:height" content="640"/>
        <meta property="og:image:width" content="640"/>
        <meta property="og:image:type" content="image/png"/>

        <link rel="icon" type="image/ico" href="/img/david-docampo-logo.ico">

        <title>Portfolio - David Docampo</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
