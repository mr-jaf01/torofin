<x-app-layout>
    <div class="px-2 py-4 mb-20">
        
        <x-app-header>

           <div class="flex flex-row justify-between items-center">
                <a href="{{route('app.home')}}" class="rounded-lg bg-iconbg-50 p-1">
                    <x-polaris-minor-arrow-left class="w-6 h-6 text-primarycolor-100" />
                </a>
                <span class="text-sm">Transfer</span>
           </div>

        </x-app-header>

        <main>
            <section class="flex flex-col gap-8 my-12">

                <a href="{{route('app.transfer.local.page')}}" id="local-transfer" class="card-border-radius flex flex-row gap-2 justify-between items-center bg-white p-5 shadow-sm">
                    
                    <div class="flex flex-row justify-start items-center gap-2">
                        <span class="rounded-lg bg-iconbg-50 p-1">
                            <img src="{{asset('/assets/images/logo/logo1.png')}}" class="w-6 h-6" alt="" srcset="">
                        </span>
                        
                        <span class="text-sm text-primarycolor-100">To Wachacom Account</span>
                    </div>
                    
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-minor-arrow-right class="w-6 h-6 text-primarycolor-100" />
                    </span>

                </a>

                <a href="{{route('app.transfer.other.banks.page')}}" id="others-bank-transfer" class="card-border-radius flex flex-row gap-2 justify-between items-center bg-white p-5 shadow-sm">
                    
                    <div class="flex flex-row justify-start items-center gap-2">
                        <span class="rounded-lg bg-iconbg-50 p-1">
                            <x-polaris-major-bank class="w-6 h-6 text-primarycolor-100" />
                        </span>
                        
                        <span class="text-sm text-primarycolor-100">To Other Bank Account</span>
                    </div>
                    
                    <span class="rounded-lg bg-iconbg-50 p-1">
                        <x-polaris-minor-arrow-right class="w-6 h-6 text-primarycolor-100" />
                    </span>

                </a>

            </section>
        </main>
    </div>
</x-app-layout>