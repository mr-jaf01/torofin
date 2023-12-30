
<div class="bg-white">

    <!-- Navigation Bar -->
    <nav class="bg-white px-4 sm:fixed sm:top-0 sm:right-0 w-full rounded rouded-bl-full mb-12 md:mb-0">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <a href="/" class="text-2xl cursor-pointer font-bold text-primarycolor-100 flex justify-start items-center flex-row gap-2">
                    <img src="{{asset('/assets/images/logo/logo.png')}}" class="h-20 w-20" alt="" srcset="">
                    Wachcom
                </a>
                <div class="md:flex hidden">
                    @if (Route::has('login'))
                    <div class="p-6 text-right z-10 text-primarycolor-100">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold outline-none focus:outline-none  border rounded-full px-6 py-2">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-xs outline-none  focus:outline-none  border rounded-full px-6 py-2">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-xs font-semibold outline-none focus:outline-none border rounded-full px-6 py-2">Register</a>
                            @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-primarycolor-100 text-white flex flex-col gap-12 md:gap-0  md:flex-row text-center md:mt-24" style="border-bottom-left-radius: 130px; border-top-right-radius:130px;">
        
        <div class="flex flex-col justify-center items-center w-full px-8 py-8 md:py-0">
            <h1 class="text-5xl md:text-7xl font-bold mb-4">Welcome to Wachcom - Easy Payments</h1>
            <p class="text-lg md:text-2xl">We offer instant recharge of Airtime, Data Bundle, Cable TV (DStv, GOtv & Startimes), Electricity Bill Payment, and more.</p>
            {{-- <div class="mt-8">
                <a href="/register" class="bg-white text-primarycolor-100 font-bold py-4 px-6 rounded-full">Get Started</a>
            </div> --}}
        </div>

       <div class="w-full">

            <div class="mockup-phone border-primarycolor-100">
                <div class="camera"></div> 
                <div class="display">
                    <div class="artboard artboard-demo phone-1 bg-white">
                        
                        <img src="{{asset('/assets/images/logo/logo.png')}}" class="h-20 w-20" alt="" srcset="">
                        <h2 class="text-3xl font-bold text-primarycolor-100">Wachcom</h2>
                        <h2 class="text-4xl font-serif">Easy Payment</h2>

                        <div class="my-12">
                            <a href="/register" class="bg-white text-primarycolor-100 font-bold py-4 px-6 rounded-full border">Get Started</a>
                        </div>

                        <div class="my-12">
                            <a href="#" class="w-full flex flex-row gap-2">
                                <img src="{{asset('/assets/images/logo/downloadapp.png')}}" class="h-24" alt="" srcset="">
                                {{-- <img src="{{asset('/assets/images/logo/androidapp.png')}}" class="h-20" alt="" srcset=""> --}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

       </div>

    </header>

    


    <!-- Services Section -->
    <section class="py-28">
        <div class="container mx-auto px-12">
            <h2 class="text-6xl font-bold my-8 text-center flex flex-col justify-center gap-8 items-center text-primarycolor-100">
                <span class="rounded-lg bg-iconbg-50 p-2">
                    <x-polaris-major-settings class="h-16 w-16 text-primarycolor-100" />
                </span>
                Our Services
            </h2>
            <p class="text-2xl text-center">Wachcom offers instant recharge of Airtime, Data Bundles, Cable TV (DStv, GOtv & Startimes), Electricity Bill Payment, and more.</p>
        </div>
    </section>

    <!-- Security Section -->
    <section class="bg-primarycolor-100 py-16 flex flex-col-reverse md:flex-row px-4 text-white">

        <div class="w-full">
            <h2 class="text-6xl font-bold mb-8 text-center">
                Wachcom Security System
            </h2>
            <p class="text-lg text-center">Wachcom provides the greatest layer of security for your VTU business, protecting against hackers and fraud with super self-hosted spyware monitoring activities on websites.</p>
        </div>

        <div class="w-full flex flex-row justify-center items-center">
            <span class="rounded-lg bg-iconbg-50 p-2">
                <x-polaris-major-secure class="h-28 w-28 text-white" />
            </span>
            
        </div>

    </section>

    <!-- API Section -->
    <section class="py-28">
        <div class="container mx-auto px-12">
            <h2 class="text-6xl font-bold my-8 text-center flex flex-col justify-center gap-8 items-center text-primarycolor-100">
                <span class="rounded-lg bg-iconbg-50 p-2">
                    <x-polaris-major-code class="h-16 w-16 text-primarycolor-100" />
                </span>
                Wachcom APIs
            </h2>
            <p class="text-2xl text-center">Thousands of businesses use Wachcom's APIs to send mobile top-ups and other bill payments worldwide. Our cloud platform offers a simple solution to complex coding for Airtime, Data Bundles, and Utility Payments.</p>
        </div>
    </section>

    <!-- Easy Payment Section -->
    <section class="bg-primarycolor-100 py-28 text-white" style="border-bottom-right-radius: 130px; border-top-left-radius:130px;">
        <div class="container mx-auto px-12">
            <h2 class="text-6xl font-bold my-8 text-center flex flex-col justify-center gap-8 items-center text-white">
                <span class="rounded-lg bg-iconbg-50 p-2">
                    <x-polaris-major-payments class="h-16 w-16 text-white" />
                </span>
                Wachcom Easy Payment
            </h2>
            <p class="text-2xl text-center">Top up phone airtime or internet data, pay electricity bills, renew TV subscriptions, buy quality insurance covers, pay education bills, transfer funds, and more with ease.</p>
        </div>
    </section>

    <!-- Become an Agent Section -->
    <section class="py-28 bg-white">
        <div class="container mx-auto px-12">
            <h2 class="text-6xl font-bold my-8 text-center flex flex-col justify-center gap-8 items-center text-primarycolor-100">
                <span class="rounded-lg bg-iconbg-50 p-2">
                    <x-polaris-major-code class="h-16 w-16 text-primarycolor-100" />
                </span>
                Become an Agent
            </h2>
            <p class="text-2xl text-center">Join our network of outstanding entrepreneurs partnering with Wachcom. Bring the Wachcom 'easy-payments' experience closer to your network and earn a commission for every transaction you perform for your customers.</p>
        </div>
    </section>

    
    <footer class="footer p-10 bg-primarycolor-100 text-white">
        <nav>
          <header class="footer-title">Services</header> 
          <a class="link link-hover">Top Up</a>
          <a class="link link-hover">Data</a>
          <a class="link link-hover">Bills Payment</a>
          <a class="link link-hover">Subscription</a>
        </nav> 
        <nav>
          <header class="footer-title">Company</header> 
          <a class="link link-hover">About us</a>
          <a class="link link-hover">Contact</a>
          <a class="link link-hover">carrer</a>
          <a class="link link-hover">Blog</a>
        </nav> 
        <nav>
          <header class="footer-title">Legal</header> 
          <a class="link link-hover">Terms of use</a>
          <a class="link link-hover">Privacy policy</a>
          <a class="link link-hover">Cookie policy</a>
        </nav>
        <nav>
            <header class="footer-title">Download</header> 
            <a href="#" class="w-full flex flex-row gap-2">
                <img src="{{asset('/assets/images/logo/downloadapp.png')}}" class="h-28" alt="" srcset="">
                {{-- <img src="{{asset('/assets/images/logo/androidapp.png')}}" class="h-20" alt="" srcset=""> --}}
            </a>
          </nav>
      </footer> 
      <footer class="footer px-10 py-4 border-t bg-white text-primarycolor-100 border-base-300">
        <aside class="items-center grid-flow-col">
          <img src="{{asset('/assets/images/logo/logo.png')}}" class="h-20 w-20" alt="" srcset="">
          <p>Wachcom. <br/>&copy; 2023 Wachcom. All rights reserved.</p>
        </aside> 
        <nav class="md:place-self-center md:justify-self-end">
          <div class="grid grid-flow-col gap-4">
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
          </div>
        </nav>
    </footer>

</div>

