<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('/assets/images/logo/logo1.png')}}" type="image/x-icon">

        <title>TOROFIN - Unique Banking Experience</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
       

         <!-- Custom Styles   -->
         <link rel="stylesheet" href="{{asset('/assets/css/index.css')}}">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">

        <x-progress-bar />

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <x-landing />
        </div>


        <script src="{{asset('/assets/js/jquery.js')}}"></script>
        <script src="{{asset('/assets/js/progressbar.js')}}"></script>
    </body>
</html>
