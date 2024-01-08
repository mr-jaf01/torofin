<form action="{{ route('app.transfer.other.bank.sendmoneyfunc') }}" method="post">
    @csrf

    <div class="modal modal-bottom" role="dialog" id="sendMoneyModalBank">
        <div class="modal-box">

            <x-modal-header>
                <div class="flex flex-row justify-between items-center mb-8">
                    <a href="{{route('app.transfer.other.banks.page')}}" class="rounded-lg bg-gray-50 shadow-sm border p-1">
                        <x-polaris-major-mobile-chevron class="w-6 h-6 text-primarycolor-100" />
                    </a>
                    <span class="text-sm text-primarycolor-100">Transfer To Bank</span>
                </div>
            </x-modal-header>

            @if (json_decode(urldecode(request('recipient'))))
                <div class="flex flex-col justify-center items-center gap-4">
                
                    <div id="account_details" class="flex flex-col justify-center items-center gap-4">

                        <div class="flex flex-row justify-center items-center gap-2 w-full">
                            <div class="rounded-full bg-primarycolor-100 text-white p-1 h-12 w-12 flex flex-row justify-center items-center">
                                AB
                            </div>
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <span>{{ json_decode(urldecode(request('recipient')))->account_name }}</span>
                            <span>{{ json_decode(urldecode(request('recipient')))->account_number }}</span>
                        </div>

                    </div>

                    <div id="amount" class="w-full my-4 flex flex-col gap-8">

                        <div class="flex flex-col gap-1 w-full">
                            <label for="amount" class="text-xs">Amount</label>
                            <div class="flex">
                                    <span class="inline-flex items-center px-3 text-sm  bg-iconbg-50 rounded-e-0 rounded-s-lg">
                                        <span class="w-6 h-6 text-primarycolor-100 flex flex-row justify-center items-center font-bold">
                                            ₦
                                        </span>
                                    </span>
                                    <x-text-input type="number" required inputmode="numeric" name="amount" id="amount"  class="rounded-e-lg bg-gray-50 focus:ring-0 focus:ring-primarycolor-100 shadow-sm border-gray-50  focus:border-primarycolor-100  block flex-1 min-w-0 w-full text-xs  p-2.5"  placeholder="50 - 5,000,000" />
                            </div>
                            <x-input-error :messages="$errors->get('amount')" class="text-xs" />
                            <x-input-error :messages="$errors->get('bank')" class="text-xs" />
                            <x-input-error :messages="$errors->get('account_number')" class="text-xs" />
                            <x-input-error :messages="$errors->get('sender')" class="text-xs" />
                        </div>

                        <div class="flex flex-col gap-1 w-full">
                            <label for="remark" class="text-xs">Remark</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-sm  bg-iconbg-50 rounded-e-0 rounded-s-lg">
                                    <img src="{{asset('/assets/images/logo/logo1.png')}}" class="w-6 h-6" alt="" srcset="">
                                </span>
                                <x-text-input type="text" name="remark"  id="remark" class="rounded-e-lg bg-gray-50 focus:ring-0 focus:ring-primarycolor-100 shadow-sm border-gray-50  focus:border-primarycolor-100  block flex-1 min-w-0 w-full text-xs  p-2.5" placeholder="what's this for? (Optional)" />
                            </div>
                        </div>
                        
                    </div>

                </div>


                <div class="modal-action">
                    <button class=" bg-primarycolor-100 text-white px-8 py-2 rounded-full">Pay</button>
                </div>


                <input type="hidden" required name="account_number" value="{{ json_decode(urldecode(request('recipient')))->account_number }}">
                <input type="hidden" required name="bank" value="{{ json_decode(urldecode(request('recipient')))->bank }}">
                <input type="hidden" required name="sender" value="{{Auth::user()->id}}">
            @else
                
            <section class="flex flex-row justify-center items-center p-5">
                <h4 class="text-center text-xs">{{ request('message') }}</h4>
            </section>
            
            @endif

        </div>

    </div>

</form>


