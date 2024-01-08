<x-app-layout>

    <div class="px-2 py-4 mb-20">
        <x-app-header>

            <div class="flex flex-row justify-between items-center">
                <a href="{{route('app.home')}}" class="rounded-lg bg-gray-50 shadow-sm border p-1">
                    <x-polaris-major-mobile-chevron class="w-6 h-6 text-primarycolor-100" />
                </a>
                <span class="text-sm">Other Bank Transfer</span>
            </div>
            
        </x-app-header>
        
    
        <main>

            <form action="{{ route('app.transfer.other.banks.verify.account.func') }}" method="POST">
                @csrf
                <section class="flex flex-col gap-3 bg-white p-5 card-border-radius my-4 shadow-sm">
                    
                    <h4 class="text-sm font-semibold">Recipient Account</h4>
                    <div class="flex flex-col gap-1">
                        <div class="flex">
                            <span class="inline-flex items-center px-3 text-sm  bg-iconbg-50 rounded-e-0 rounded-s-lg">
                                <img src="{{asset('/assets/images/logo/logo1.png')}}" class="w-6 h-6" alt="" srcset="">
                            </span>
                            <x-text-input type="number" name="recipient"  inputmode="numeric" required id="recipient" maxlength="10" minlength="10" class="rounded-e-lg bg-gray-50 block ring-0 focus:ring-0 border border-gray-50 flex-1 min-w-0 w-full text-sm  p-2.5" placeholder="Account No." />
                        </div>
                        <x-input-error :messages="$errors->get('recipient')" class="" />
                    </div>


                    <div class="flex flex-col gap-1 w-full mt-6">
                        <label for="rbank" class="text-sm font-semibold">Select Recipient Bank</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 text-sm  bg-iconbg-50 rounded-e-0 rounded-s-lg">
                                <span class="">
                                    <x-polaris-major-bank class="w-6 h-6 text-primarycolor-100" />
                                </span>
                            </span>
                            <select name="bank" id="rbank" required  class="rounded-lg uppercase focus:ring-0 focus:ring-primarycolor-100 shadow-sm border-gray-50 bg-gray-50  focus:border-primarycolor-100  block flex-1 min-w-0 w-full text-xs  p-2.5" >
                                <option selected value="{{ request('bank') }}"> {{ request('bank') }} </option>
                                @foreach ($banks as $bank)
                                    <option value="{{ $bank['variation_code'] }}" class="uppercase"> {{ $bank['name'] }} </option>  
                                @endforeach
                            </select>
                        </div>
                        <x-input-error :messages="$errors->get('bank')" class="" />
                    </div>

                </section>
            
            
                <section id="result" class="flex flex-col justify-center items-center mt-20">
                    
                    <button  id="checkrecipientBtn" class="rounded-full gap-4 flex flex-row justify-center items-center w-full mx-2 md:w-1/3 md:mx-0 px-6 py-2 bg-primarycolor-100 text-white">
                        Confirm
                    </button>
                    
                </section>
            </form>
            
        </main>

        <x-send-money-bank />
    </div>
   
</x-app-layout>