<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'TOROFIN') }}</title>
        
        <link rel="shortcut icon" href="{{asset('/assets/images/logo/logo1.png')}}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

         <!-- Custom Styles   -->
         <link rel="stylesheet" href="{{asset('/assets/css/index.css')}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-primarycolor-100 antialiased overflow-hidden">

        <x-progress-bar />
        
        <div class="md:hidden pt-1 bg-gray-100  flex flex-col justify-center items-center">
            <a href="/" class="">
                <x-application-logo />
            </a>
            <span class="font-bold text-2xl tracking-wider">TOROFIN</span>
        </div>

        <div class="min-h-screen flex flex-col justify-center items-center bg-gray-100">
            
            <div class="hidden md:flex">
                <a href="/" class="">
                    <x-application-logo />
                </a>
            </div>

            <div class="w-full md:max-w-md md:mt-6 fixed bottom-0 md:static md:bottom-auto px-6 py-4 bg-white shadow-sm overflow-hidden rounded-lg">
                {{ $slot }}
            </div>

        </div>



        <script src="{{asset('/assets/js/jquery.js')}}"></script>
        <script src="{{asset('/assets/js/progressbar.js')}}"></script>
    </body>
</html>
