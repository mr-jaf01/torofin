<div class="px-2 py-4">

    <x-app-header>

        <div class="flex flex-row justify-between items-center">
             <a href="{{route('app.me')}}" class="rounded-lg bg-iconbg-50 p-1">
                 <x-polaris-major-mobile-chevron class="w-6 h-6 text-primarycolor-100" />
             </a>
             <span class="text-sm">Settings</span>
        </div>

    </x-app-header>

     <main class="flex flex-col gap-3 my-2">

        <section class="bg-white justify-center card-border-radius shadow-sm p-2 flex flex-col">

            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-lock class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">Login Settings</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>

            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-payments class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">Payment Settings</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>


            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-question-mark class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">Security Question</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>
        </section>

        <section class="bg-white justify-center card-border-radius shadow-sm p-2 flex flex-col">

            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-cash-dollar class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">Savings Settings</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>

            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-mobile class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">SMS Alert Subscription</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>

        </section>

        <section class="bg-white justify-center card-border-radius shadow-sm p-2 flex flex-col">

            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-customer-minus class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">Close Account</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>

            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-circle-information class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">About TOROFIN</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>
            
        </section>

        <section class="flex flex-row justify-center items-center">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
            <button class="px-4 py-1 text-xs bg-primarycolor-100 text-white rounded-full">Log out</button>
            </form>
        </section>

     </main>
    
</div>