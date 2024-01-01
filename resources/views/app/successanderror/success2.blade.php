<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wachcom Transfer Successfully</title>
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


     <style>
         .card-border-radius
         {
             border-radius: 19px;
         }
     </style>
     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="px-2 py-4 mb-20">

        <x-app-header>

            <div class="flex flex-row justify-between items-center">
                <a href="{{route('app.home')}}" class="rounded-lg bg-iconbg-50 p-1">
                    <x-polaris-minor-arrow-left class="w-6 h-6 text-primarycolor-100" />
                </a>
                <span class="text-sm">Success</span>
            </div>
            
        </x-app-header>


        <main>
            <section class="flex flex-col justify-center items-center">

                <x-application-logo />
                
                
                <div class="flex flex-col justify-center items-center w-full px-5">
                    
                    <h2 class="text-2xl font-bold my-4 text-center flex flex-col justify-center  items-center text-primarycolor-100">
                        <span class="rounded-lg bg-iconbg-50 p-2">
                            <x-polaris-major-status-active class="h-8 w-8 text-primarycolor-100" />
                        </span>
                    </h2>

                    <div class="my-2 text-primarycolor-100 text-lg text-center"> {{ $status }}</div>

                    <div class="flex flex-col gap-4 w-full mt-4">
                        <a href="{{route('app.home')}}" class="border border-primarycolor-100  rounded-full text-primarycolor-100 px-4 py-1 flex flex-row justify-center items-center w-full">Done</a>
                        <button class="bg-primarycolor-100 text-white px-4 py-1 rounded-full flex flex-row justify-center items-center w-full">Share Receipt</button>
                    </div>
                    
                </div>
            </section>
        </main>

    </div>
</body>
</html>
