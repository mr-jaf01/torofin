<div class="">

    <header class=" bg-primarycolor-100 shadow-sm  text-white px-3 py-3">
       
        <section class="flex flex-row items-center justify-between px-2 py-2">

             {{-- profile picture --}}
            <a href="{{route('app.profile')}}" class="flex flex-row justify-start items-center gap-2 w-full">
                <div class="rounded-full bg-white text-primarycolor-100 p-1 h-12 w-12 flex flex-row justify-center items-center">
                    {{Auth::user()->name[0]}}
                </div>
                <span class="text-xs font-semibold text-white">Hi, {{Auth::user()->name}}</span>
            </a>
        
            {{-- notifcation and support --}}
            <a href="{{ route('app.settings.page') }}" class="">
                <span class="rounded-lg bg-iconbg-50 p-1 flex flex-row justify-center items-center">
                    <x-polaris-minor-settings-filled class="w-6 h-6 text-white" />
                </span>
            </a>

        </section>

       <section class="py-1 px-2">
            <div><span class="font-bold text-xs">Total Balance</span></div>
            <div>
                <span class="text-3xl font-bold tracking-tighter">
                    <small>₦</small> {{number_format($wallet->available_bal, 2)}}
                </span>
                <br>
                <small class="text-xs">& Rewards <b>₦ {{number_format($wallet->reward_bal, 2)}} </b></small>
           </div>
       </section>

    </header>


    <main class="p-3">

        <section class="bg-white justify-center card-border-radius shadow-sm p-2 flex flex-col">

            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-legal class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">Transaction History</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>

            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-stop class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">Account Limits</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>


            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-bank class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">Bank Card/Account</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>


            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-minor-capture-payment class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">Pay Me</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>

        </section>

        <section class="bg-white justify-center card-border-radius shadow-sm p-2 flex flex-col my-2">

            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-secure class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">Security Center</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>

            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-question-mark class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">Support</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>


            <div class="flex flex-row items-center justify-between my-2">
                
                <div class="flex flex-row justify-center items-center gap-2">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-minor-star-outline class="w-5 h-5 text-primarycolor-100" />
                    </span>
                    <span class="text-xs">Rate Us</span>
                </div>
                <x-polaris-minor-chevron-right class="w-4 h-4 text-primarycolor-100" /> 

            </div>

        </section>
    </main>

</div>