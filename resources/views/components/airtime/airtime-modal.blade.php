<form action="{{route('app.transaction.airtime')}}" method="post">
    @csrf

    <div class="modal modal-bottom" role="dialog" id="airtimeModal">
        <div class="modal-box overflow-hidden">

            <x-modal-header>
                <div class="flex flex-row justify-between items-center mb-4">
                    <a href="#" class="rounded-lg bg-gray-50 shadow-sm border p-1">
                        <x-polaris-major-mobile-chevron class="w-6 h-6 text-primarycolor-100" />
                    </a>
                    <span class="text-sm text-primarycolor-100">Airtime</span>
                </div>
            </x-modal-header>
    
            <div id="details" class="w-full my-2 flex flex-col gap-4">

                <div class="flex flex-row gap-8 items-center"> 

                    <label for="mtn" class="p-2 flex flex-col gap-1 border card-border-radius bg-gray-50 items-center">
                        <div class="flex flex-row justify-end">
                            <input type="radio" value="mtn" name="network" id="mtn">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{asset('/assets/images/logo/mtn.png')}}" alt="mtn-logo" class="w-6 h-6 rounded-full">
                        </div>
                    </label>
                        
                    

                    <label for="airtel" class="p-2 flex flex-col gap-1 border card-border-radius bg-gray-50 items-center">
                        <div class="flex flex-row justify-end">
                            <input type="radio" value="airtel" name="network" id="airtel">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{asset('/assets/images/logo/airtel.jpeg')}}" alt="airtel-logo" class="w-6 h-6 rounded-full">
                        </div>
                    </label>
                       

                    <label for="glo" class="p-2 flex flex-col gap-1 border card-border-radius bg-gray-50 items-center">
                        <div class="flex flex-row justify-end">
                            <input type="radio" value="glo" name="network" id="glo">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{asset('/assets/images/logo/glo.jpeg')}}" alt="glo-logo" class="w-6 h-6 rounded-full">
                        </div>
                    </label>

                    <label for="9mobile" class="p-2 flex flex-col gap-1 border card-border-radius bg-gray-50 items-center">
                        <div class="flex flex-row justify-end">
                            <input type="radio" value="etisalat" name="network" id="9mobile">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{asset('/assets/images/logo/9mobile.jpeg')}}" alt="9mobile-logo" class="w-6 h-6 rounded-full">
                        </div>
                    </label>
                    
                </div>
                <x-input-error :messages="$errors->get('network')" class="text-xs" />

                <div class="flex flex-col gap-1 w-full">
                    <label for="mobilenoairtime" class="text-xs">Phone Number</label>
                    <div class="flex">
                            <span class="inline-flex items-center px-3 text-sm  bg-iconbg-50 rounded-e-0 rounded-s-lg">
                                <x-polaris-major-phone class="w-6 h-6 text-primarycolor-100 flex flex-row justify-center items-center font-bold" />
                            </span>
                            <input type="number" required inputmode="numeric" name="mobileno" id="mobilenoairtime" maxlength="11" minlength="11" class="rounded-lg bg-gray-50 focus:ring-0 focus:ring-primarycolor-100 shadow-sm border-gray-50  focus:border-primarycolor-100 block flex-1 min-w-0 w-full text-xs  p-2.5"  placeholder="08132911690" />
                    </div>
                    <x-input-error :messages="$errors->get('mobileno')" class="text-xs" />
                </div>

                <div class="flex flex-col gap-1 w-full">
                    <label for="amount" class="text-xs">Amount</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm  bg-iconbg-50 rounded-e-0 rounded-s-lg">
                            <span class="w-6 h-6 text-primarycolor-100 flex flex-row justify-center items-center font-bold">
                                ₦
                            </span>
                        </span>
                        <x-text-input type="number" required  name="amount" inputmode="numeric"  id="amount" class="rounded-e-lg focus:ring-0 focus:ring-primarycolor-100 bg-gray-50 shadow-sm border-gray-50  focus:border-primarycolor-100 block flex-1 min-w-0 w-full text-xs  p-2.5" placeholder="50 - 50,000" />
                    </div>
                    <x-input-error :messages="$errors->get('amount')" class="text-xs" />
                </div>
                
            </div>

            <div class="flex flex-col justify-center items-center gap-1 w-full mt-1">
                <label for="paymentpin" class="text-xs">Enter 4 Digit PIN</label>
                <div class="flex w-1/3">
                    <input type="password" required name="pin" maxlength="4" minlength="4" inputmode="numeric"  id="paymentpin" autocomplete="off" class="rounded-lg text-center bg-gray-50 focus:ring-0 focus:ring-primarycolor-100 shadow-sm border-gray-50  focus:border-primarycolor-100  w-full p-2.5" placeholder="****" />
                </div>
                <x-input-error :messages="$errors->get('pin')" class="text-xs" />
            </div>

            <input type="hidden" name="sender_id" value="{{ Auth::user()->id }}">

            <div class="modal-action">
                <button class=" bg-primarycolor-100 text-white px-8 py-2 rounded-full">Pay</button>
            </div>
        </div>
    </div>
</form>

