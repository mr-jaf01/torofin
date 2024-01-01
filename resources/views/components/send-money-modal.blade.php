    <form action="{{route('app.transfer.local.func')}}" method="post">
        @csrf

        <div class="modal modal-bottom" role="dialog" id="sendMoneyModal">
            <div class="modal-box">

                    <x-modal-header>
                        <div class="flex flex-row justify-between items-center mb-8">
                            <a href="{{route('app.transfer.local.page')}}" class="rounded-lg bg-iconbg-50 p-1">
                                <x-polaris-minor-arrow-left class="w-6 h-6 text-primarycolor-100" />
                            </a>
                            <span class="text-sm text-primarycolor-100">Transfer To TOROFIN Account</span>
                        </div>
                    </x-modal-header>
                   
                
                
                @if (getwalletByAccount(request('recipient')))


                    <div class="flex flex-col justify-center items-center gap-4">
                    
                        <div id="account_details" class="flex flex-col justify-center items-center gap-4">

                            <div class="flex flex-row justify-center items-center gap-2 w-full">
                                <div class="rounded-full bg-primarycolor-100 text-white p-1 h-12 w-12 flex flex-row justify-center items-center">
                                    {{ getuserById(getwalletByAccount(request('recipient'))->user_id)->name[0] }}
                                </div>
                            </div>

                            <div class="flex flex-col justify-center items-center">
                                <span>{{  getwalletByAccount(request('recipient')) ? getuserById(getwalletByAccount(request('recipient'))->user_id)->name  : 'Acoount Not Found' }}</span>
                                <span>{{  getwalletByAccount(request('recipient')) ? getwalletByAccount(request('recipient'))->account_number : 'Account Not Found' }}</span>
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
                                        <x-text-input type="number" inputmode="numeric" name="amount" id="amount" required class="rounded-e-lg border-primarycolor-100 focus:border-0  focus:ring-examportalsecondary-100  block flex-1 min-w-0 w-full text-xs  p-2.5"  placeholder="50 - 5,000,000" />
                                </div>
                            </div>

                            <div class="flex flex-col gap-1 w-full">
                                <label for="remark" class="text-xs">Remark</label>
                                <div class="flex">
                                    <span class="inline-flex items-center px-3 text-sm  bg-iconbg-50 rounded-e-0 rounded-s-lg">
                                        <img src="{{asset('/assets/images/logo/logo1.png')}}" class="w-6 h-6" alt="" srcset="">
                                    </span>
                                    <x-text-input type="text" name="remark"  id="remark" class="rounded-e-lg border-primarycolor-100 focus:border-0  focus:ring-examportalsecondary-100  block flex-1 min-w-0 w-full text-xs  p-2.5" placeholder="what's this for? (Optional)" />
                                </div>
                            </div>
                            
                        </div>

                    </div>


                    <div class="modal-action">
                        <button class=" bg-primarycolor-100 text-white px-8 py-2 rounded-full">Pay</button>
                    </div>


                    <input type="hidden" name="receiver" value="{{getwalletByAccount(request('recipient'))->user_id}}">
                    <input type="hidden" name="sender" value="{{Auth::user()->id}}">

                @else
                    <div class="flex flex-row justify-center items-center">
                        <h2 class="text-3xl font-bold my-8 text-center flex flex-col justify-center gap-8 items-center text-primarycolor-100">
                            <span class="rounded-lg bg-iconbg-50 p-2">
                                <x-polaris-major-cancel class="h-16 w-16 text-red-500" />
                            </span>
                            Account Not Found!
                        </h2>
                    </div>
                @endif

            </div>

        </div>

    </form>


