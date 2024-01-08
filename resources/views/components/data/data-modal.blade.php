<form action="{{ route('app.transaction.data') }}" method="post">
    @csrf
    <div class="modal modal-bottom" role="dialog" id="dataModal">
        <div class="modal-box overflow-hidden">

            <x-modal-header>
                <div class="flex flex-row justify-between items-center mb-4">
                    <a href="#" class="rounded-lg bg-gray-50 shadow-sm border p-1">
                        <x-polaris-major-mobile-chevron class="w-6 h-6 text-primarycolor-100" />
                    </a>
                    <span class="text-sm text-primarycolor-100">Data</span>
                </div>
            </x-modal-header>
            
            <div id="details" class="w-full my-2 flex flex-col gap-4">

                <div class="flex flex-row gap-8 items-center"> 

                    <label for="mtndata" class="p-2 flex flex-col gap-1 border card-border-radius bg-gray-50 items-center">
                        <div class="flex flex-row justify-end">
                            <input type="radio" value="mtn" name="network" id="mtndata">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{asset('/assets/images/logo/mtn.png')}}" alt="mtn-logo" class="w-6 h-6 rounded-full">
                        </div>
                    </label>
                        
                    <label for="airteldata" class="p-2 flex flex-col gap-1 border card-border-radius bg-gray-50 items-center">
                        <div class="flex flex-row justify-end">
                            <input type="radio" value="airtel" name="network" id="airteldata">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{asset('/assets/images/logo/airtel.jpeg')}}" alt="airtel-logo" class="w-6 h-6 rounded-full">
                        </div>
                    </label>
                       
                    <label for="glodata" class="p-2 flex flex-col gap-1 border card-border-radius bg-gray-50 items-center">
                        <div class="flex flex-row justify-end">
                            <input type="radio" value="glo" name="network" id="glodata">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{asset('/assets/images/logo/glo.jpeg')}}" alt="glo-logo" class="w-6 h-6 rounded-full">
                        </div>
                    </label>

                    <label for="9mobiledata" class="p-2 flex flex-col gap-1 border card-border-radius bg-gray-50 items-center">
                        <div class="flex flex-row justify-end">
                            <input type="radio" value="etisalat" name="network" id="9mobiledata">
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{asset('/assets/images/logo/9mobile.jpeg')}}" alt="9mobile-logo" class="w-6 h-6 rounded-full">
                        </div>
                    </label>
                    
                </div>
                <x-input-error :messages="$errors->get('network')" class="text-xs" />
                

                <div class="flex flex-col gap-1 w-full">
                    <label for="mobilenodata" class="text-xs">Phone Number</label>
                    <div class="flex">
                            <span class="inline-flex items-center px-3 text-sm  bg-iconbg-50 rounded-e-0 rounded-s-lg">
                                <x-polaris-major-phone class="w-6 h-6 text-primarycolor-100 flex flex-row justify-center items-center font-bold" />
                            </span>
                            <input type="number" required  inputmode="numeric" name="mobileno" id="mobilenodata" maxlength="11" minlength="11" class="rounded-lg focus:ring-0 focus:ring-primarycolor-100 shadow-sm border bg-gray-50 border-gray-50  focus:border-primarycolor-100  block flex-1 min-w-0 w-full text-xs  p-2.5"  placeholder="08132911690" />
                    </div>
                    <x-input-error :messages="$errors->get('mobileno')" class="text-xs" />
                </div>    


                <div class="flex flex-col gap-1 w-full">
                    <label for="plan" class="text-xs">Data Plan</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm  bg-iconbg-50 rounded-e-0 rounded-s-lg">
                            <span class="w-6 h-6 text-primarycolor-100 flex flex-row justify-center items-center font-bold">
                                ₦
                            </span>
                        </span>
                        <select name="plan" id="plan" required  class="rounded-lg focus:ring-0 focus:ring-primarycolor-100 shadow-sm border-gray-50 bg-gray-50   focus:border-primarycolor-100 block flex-1 min-w-0 w-full text-xs  p-2.5" >
                            <option value=""></option>
                            <option value="1gb">1GB -  ₦ 225</option>
                            <option value="2gb">2GB -  ₦ 450</option>
                            <option value="3gb">3GB -  ₦ 750</option>
                            <option value="4gb">4GB -  ₦ 1000</option>
                        </select>
                    </div>
                    <x-input-error :messages="$errors->get('plan')" class="" />
                </div>
                
            </div>

            <div class="flex flex-col justify-center items-center gap-1 w-full mt-1">
                <label for="paymentpindata" class="text-xs">Enter 4 Digit PIN</label>
                <div class="flex w-1/3">
                    <input type="password" required name="pin" maxlength="4" minlength="4" inputmode="numeric"  id="paymentpindata" autocomplete="off" class="rounded-lg focus:ring-0 bg-gray-50 focus:ring-primarycolor-100 shadow-sm border-gray-50  focus:border-primarycolor-100 text-center  w-full p-2.5" placeholder="****" />
                </div>
                <x-input-error :messages="$errors->get('pin')" class="text-xs" />
            </div>

            <input type="hidden" name="amount" value="100">
            <input type="hidden" name="sender_id" value="{{ Auth::user()->id }}">

    
            <div class="modal-actiondata flex flex-row justify-end">
                <button  class=" bg-primarycolor-100 text-white px-8 py-2 rounded-full">Pay</button>
            </div>
        </div>
    </div>
</form>