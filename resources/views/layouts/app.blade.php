<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('/assets/images/logo/logo1.png')}}" type="image/x-icon">

        <title>{{ config('app.name', 'TOROFIN') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <!-- Custom Styles   -->
        <link rel="stylesheet" href="{{asset('/assets/css/index.css')}}">



        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
       
        <x-progress-bar />

        <div class="min-h-screen bg-gray-50">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
               
                <x-bottom-app-nav />
            </main>
        </div>

       


        <script src="{{asset('/assets/js/jquery.js')}}"></script>
        <script src="{{asset('/assets/js/progressbar.js')}}"></script>
        <script src="{{asset('/assets/js/pulltorefresh.js')}}"></script>


        <script>
            const ptr = PullToRefresh.init({
                mainElement: 'body',
                onRefresh() {
                    window.location.reload();
                }
            });
        </script>
    </body>
</html>
