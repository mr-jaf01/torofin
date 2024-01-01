<div class="px-2 py-4 mb-20">
    
    <header class="flex flex-row justify-between items-center bg-white shadow-sm p-2 card-border-radius">
    
        {{-- profile picture --}}
        <a href="{{route('app.profile')}}" class="flex flex-row justify-start items-center gap-2 w-full">
            <div class="rounded-full bg-primarycolor-100 text-white p-1 h-12 w-12 flex flex-row justify-center items-center">
                {{Auth::user()->name[0]}}
            </div>
            <span class="text-xs font-semibold text-primarycolor-100">Hi, {{Auth::user()->name}}</span>
        </a>
    
        {{-- notifcation and support --}}
        <div class="w-full flex flex-row justify-end items-center gap-2">

            <span class="rounded-lg bg-iconbg-50 p-1">
                <x-polaris-major-notification class="w-6 h-6 text-primarycolor-100" />
            </span>

            <span class="rounded-lg bg-iconbg-50 p-1">
                <x-polaris-major-question-mark class="w-6 h-6 text-primarycolor-100" />
            </span>
           
            
        </div>
    </header>
    
    
    <main class="flex flex-col gap-4">

        <section  id="wallet-section" class="text-white bg-primarycolor-100 flex flex-col gap-4 card-border-radius w-full  my-1 p-5">
            
            <div class="flex flex-row justify-between items-center">
                <span class="text-xs">Available Balance</span>
                <span class="text-sm tracking-wide">Transaction History ></span>
            </div>

            <div id="wallet-balance">
               
                <div>
                    <span class="text-3xl font-bold tracking-tighter">
                        <small>₦</small> {{number_format($wallet->available_bal, 2)}}
                    </span>
                    <br>
                    <small class="text-xs">& Rewards <b>₦ {{number_format($wallet->reward_bal, 2)}} </b></small>
               </div>

                <div class="flex flex-row justify-between items-center">
                    <a href="#addMoneyModal" class="flex flex-col justify-center items-center">
                        <span class="rounded-lg bg-iconbg-50 p-1">
                            <x-polaris-major-circle-plus class="w-6 h-6 text-white" />
                        </span>
                        <span class="text-xs font-bold">Add Money</span>
                    </a>
                    
                    <a href="{{route('app.transfer.page')}}" class="flex flex-col justify-center items-center">
                        <span class="rounded-lg bg-iconbg-50 p-1">
                            <x-polaris-major-extend class="w-6 h-6 text-white" />
                        </span>
                        <span class="text-xs font-bold">Transfer</span>
                    </a>

                    <a href="#withdrawModal" class="flex flex-col justify-center items-center">
                        <span class="rounded-lg bg-iconbg-50 p-1">
                            <x-polaris-minor-import class="w-6 h-6 text-white" />
                        </span>
                        <span class="text-xs font-bold">Withdraw</span>
                    </a>
                </div>

            </div>

        </section>

        <section id="payment-section" class="bg-white flex flex-col gap-4 shadow-sm card-border-radius p-5">
           
            <div class="flex flex-row justify-between items-center">
                
                <a href="#airtimeModal" class="flex flex-col justify-center items-center">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-analytics class="w-6 h-6 text-primarycolor-100" />
                    </span>
                    <span class="text-xs font-bold">Airtime</span>
                </a>

                <a href="#dataModal" class="flex flex-col justify-center items-center">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-minor-sort  class="w-6 h-6 text-primarycolor-100" />
                    </span>
                    <span class="text-xs font-bold">Data</span>
                </a>

                <a href="#tvModal" class="flex flex-col justify-center items-center">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-live-view class="w-6 h-6 text-primarycolor-100" />
                    </span>
                    <span class="text-xs font-bold">TV</span>
                </a>
            </div>

            <div class="flex flex-row justify-between items-center">
                
                <a href="#electricityModal" class="flex flex-col justify-center items-center">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-confetti class="w-6 h-6 text-primarycolor-100" />
                    </span>
                    <span class="text-xs font-bold">Electricity</span>
                </a>

                <div class="flex flex-col justify-center items-center">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-referral class="w-6 h-6 text-primarycolor-100" />
                    </span>
                    <span class="text-xs font-bold">Refer & Earn</span>
                </div>

                <div class="flex flex-col justify-center items-center">
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-major-apps class="w-6 h-6 text-primarycolor-100" />
                    </span>
                    <span class="text-xs font-bold">More</span>
                </div>
            </div>

        </section>

    </main>


    <x-airtime.airtime-modal />
    <x-data.data-modal />
    <x-bills.bills-modal />
    <x-bills.tv-modal />
    <x-bills.electricity-modal />
    <x-withdraw.withdraw-modal />
    <x-addmoney.add-modal />

</div>