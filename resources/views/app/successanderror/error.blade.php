<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction Failed</title>
    <link rel="shortcut icon" href="{{asset('/assets/images/logo/logo1.png')}}" type="image/x-icon">
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



      <!-- Custom Styles   -->
      <link rel="stylesheet" href="{{asset('/assets/css/index.css')}}">



     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">

    <x-progress-bar />

    <div class="py-4 mb-20">
        
        <x-app-header>

            <div class="flex flex-row justify-between items-center">
                <a href="{{route('app.home')}}" class="rounded-lg bg-iconbg-50 p-1">
                    <x-polaris-major-mobile-chevron
                     class="w-6 h-6 text-primarycolor-100" />
                </a>
                <span class="text-sm">Failed</span>
            </div>
            
        </x-app-header>


        <main>
            <section class="flex flex-col justify-center items-center w-full">
                
                <div class="flex flex-col justify-center items-center w-full">
                    
                    <h2 class="text-2xl font-bold my-4 text-center flex flex-col justify-center gap-8 items-center text-primarycolor-100">
                        <span class="rounded-lg bg-iconbg-50 p-2">
                            <x-polaris-major-cancel class="h-8 w-8 text-red-500" />
                        </span>
                    </h2>

                    <div class="my-2 text-primarycolor-100 text-lg text-center"> {{ $status }}</div>


                    <div class="flex flex-col gap-4 w-full my-12">
                        {{-- <a href="{{route('app.home')}}" class="border border-primarycolor-100  rounded-full text-primarycolor-100 px-4 py-1 flex flex-row justify-center items-center w-full">Done</a> --}}
                        <a href="{{route('app.home')}}" class="border bg-primarycolor-100 text-white gap-2 py-3 flex flex-col justify-center items-center w-full text-xs">
                            <span class="rounded-lg bg-iconbg-50 p-1">
                                <x-polaris-major-mobile-chevron class="w-5 h-5 text-white" />
                            </span>
                            Back
                        </a>
                    </div>
                 
                </div>
            </section>
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
