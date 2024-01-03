<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction Successfully</title>
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
    <div class="px-2 py-4">

        <x-app-header>

           <div class="flex flex-row">
                <a href="{{route('app.home')}}" class="rounded-lg bg-iconbg-50 p-1">
                    <x-polaris-major-mobile-chevron class="w-6 h-6 text-primarycolor-100" />
                </a>
           </div>

            <div class="flex flex-row justify-between items-center">
                {{-- <a href="{{route('app.home')}}" class="rounded-lg bg-iconbg-50 p-1">
                    <x-polaris-major-mobile-chevron class="w-6 h-6 text-primarycolor-100" />
                </a> --}}
                <x-application-logo />
                <span class="text-sm font-bold">Transaction Receipt</span>
            </div>
            
        </x-app-header>


        <main class="px-5">

            <section class="flex flex-col justify-center items-center">
                <h2 class="text-3xl font-bold my-1 text-center flex flex-col justify-center  items-center text-primarycolor-100">
                    N 100,000.00
                </h2>  
                <span>Success</span>
                <span class="font-bold text-xs">{{ Now() }}</span>
            </section>
            <hr class="my-1">

            
            <section id="transaction_details" class="flex flex-col gap-2 my-2 text-xs">
                
                <div class=" bg-white p-3 flex flex-col gap-4 text-primarycolor-100">
                     
                    <div class="flex flex-row justify-between items-center">
                        <span class="text-xs text-gray-400">Transaction Type</span>
                        <span class="text-xs">12725635561</span>
                     </div>

                     <div class="flex flex-row justify-between items-center">
                        <span class="text-xs text-gray-400">Sender Details</span>
                        <div class="text-xs flex flex-col gap-1">
                            <span> {{ Auth::user()->name }} </span>
                            <span class="text-end"> {{ getwalletByUserId(Auth::user()->id)->account_number }} </span>
                        </div>
                     </div>


                     <div class="flex flex-row justify-between items-center">
                        <span class="text-xs text-gray-400">Recipient Details</span>
                        <div class="text-xs flex flex-col gap-1">
                            <span> {{ Auth::user()->name }} </span>
                            <span class="text-end"> {{ getwalletByUserId(Auth::user()->id)->account_number }} </span>
                        </div>
                     </div>

                     <div class="flex flex-row justify-between items-center">
                        <span class="text-xs text-gray-400">Remark</span>
                        <span class="text-sm">---</span>
                     </div>

                     <div class="flex flex-row justify-between items-center">
                        <span class="text-xs text-gray-400">Transaction Reference</span>
                        <span class="text-xs">---</span>
                     </div>

                </div>
                
            </section>


            <section id="support-email-section" class="flex flex-col justify-center items-center">
                <span class="text-xs ">Support</span>
                <span class="text-xs text-primarycolor-400 font-bold">support@torofin.ng</span>
            </section>

            <hr class="my-1 border-2  border-dotted">

            <section id="save-reciept-btn" class="flex flex-row justify-center items-center mt-12">
                
                <button type="button" class="bg-primarycolor-100 text-white px-4 py-1 rounded-full flex flex-row justify-center items-center w-full font-bold md:w-1/4">Share Receipt</button>
           
            </section>

        </main>

    </div>
</body>
</html>
