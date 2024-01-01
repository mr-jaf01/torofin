<form action="{{route('app.transaction.airtime')}}" method="post">
    @csrf

    <div class="modal modal-bottom" role="dialog" id="airtimeModal">
        <div class="modal-box">

            <x-modal-header>
                <div class="flex flex-row justify-between items-center mb-8">
                    <a href="#" class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-minor-arrow-left class="w-6 h-6 text-primarycolor-100" />
                    </a>
                    <span class="text-sm text-primarycolor-100">Airtime</span>
                </div>
            </x-modal-header>
    
            <div id="details" class="w-full my-4 flex flex-col gap-8">

                <div class="flex flex-row gap-8 items-center"> 

                    <label for="mtn" class="p-2 flex flex-col gap-1 border card-border-radius bg-gray-50 items-center">
                        <div class="flex flex-row justify-end">
                            <input type="radio" value="mtn" name="network" id="mtn">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{asset('/assets/images/logo/mtn.png')}}" alt="mtn-logo" class="w-8 h-8 rounded-full">
                        </div>
                    </label>
                        
                    

                    <label for="airtel" class="p-2 flex flex-col gap-1 border card-border-radius bg-gray-50 items-center">
                        <div class="flex flex-row justify-end">
                            <input type="radio" value="airtel" name="network" id="airtel">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{asset('/assets/images/logo/airtel.jpeg')}}" alt="airtel-logo" class="w-8 h-8 rounded-full">
                        </div>
                    </label>
                       

                    <label for="glo" class="p-2 flex flex-col gap-1 border card-border-radius bg-gray-50 items-center">
                        <div class="flex flex-row justify-end">
                            <input type="radio" value="glo" name="network" id="glo">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{asset('/assets/images/logo/glo.jpeg')}}" alt="glo-logo" class="w-8 h-8 rounded-full">
                        </div>
                    </label>

                    <label for="9mobile" class="p-2 flex flex-col gap-1 border card-border-radius bg-gray-50 items-center">
                        <div class="flex flex-row justify-end">
                            <input type="radio" value="9mobile" name="network" id="9mobile">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{asset('/assets/images/logo/9mobile.jpeg')}}" alt="9mobile-logo" class="w-8 h-8 rounded-full">
                        </div>
                    </label>
                    
                </div>
                <x-input-error :messages="$errors->get('network')" class="" />

                <div class="flex flex-col gap-1 w-full">
                    <label for="mobileno" class="text-xs">Phone Number</label>
                    <div class="flex">
                            <span class="inline-flex items-center px-3 text-sm  bg-iconbg-50 rounded-e-0 rounded-s-lg">
                                <x-polaris-major-phone class="w-6 h-6 text-primarycolor-100 flex flex-row justify-center items-center font-bold" />
                            </span>
                            <input type="number"  inputmode="numeric" name="mobileno" id="mobileno" required maxlength="11" minlength="11" class="rounded-lg focus:ring-1 focus:ring-primarycolor-100 border-primarycolor-100 focus:border-0  focus:ring-examportalsecondary-100  block flex-1 min-w-0 w-full text-xs  p-2.5"  placeholder="08132911690" />
                    </div>
                    <x-input-error :messages="$errors->get('number')" class="" />
                </div>

                <div class="flex flex-col gap-1 w-full">
                    <label for="amount" class="text-xs">Amount</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm  bg-iconbg-50 rounded-e-0 rounded-s-lg">
                            <span class="w-6 h-6 text-primarycolor-100 flex flex-row justify-center items-center font-bold">
                                ₦
                            </span>
                        </span>
                        <x-text-input type="number" name="amount" inputmode="numeric"  id="amount" class="rounded-e-lg border-primarycolor-100 focus:border-0  focus:ring-examportalsecondary-100  block flex-1 min-w-0 w-full text-xs  p-2.5" placeholder="50 - 50,000" />
                    </div>
                    <x-input-error :messages="$errors->get('amount')" class="" />
                </div>
                
            </div>

            <input type="hidden" name="sender_id" value="{{ Auth::user()->id }}">

            <div class="modal-action">
                <button  class=" bg-primarycolor-100 text-white px-8 py-2 rounded-full">Pay</button>
            </div>
        </div>
    </div>
</form>