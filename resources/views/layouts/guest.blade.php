<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Dinas Kearsipan Kota Makassar | {{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="https://3.bp.blogspot.com/-eapWDS9Zgtk/VFb9eOTNYuI/AAAAAAAAEoQ/cG2wcp15zNs/s1600/Logo-Pemerintah-Kota-Makasar.png" type="image/x-icon">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script defer src="{{ asset('vendor/alpine.js') }}"></script>
    </head>
    <body>
        <div class="font-sans antialiased text-gray-900">
            {{ $slot }}
        </div>
    </body>
</html>
