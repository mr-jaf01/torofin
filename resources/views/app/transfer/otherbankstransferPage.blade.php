<x-app-layout>


    <div class="px-2 py-4 mb-20">
        <x-app-header>

            <div class="flex flex-row justify-between items-center">
                <a href="{{route('app.home')}}" class="rounded-lg bg-iconbg-50 p-1">
                    <x-polaris-major-mobile-chevron class="w-6 h-6 text-primarycolor-100" />
                </a>
                <span class="text-sm">Other Banks Transfer</span>
           </div>
            
        </x-app-header>
    
        <main class="flex flex-row justify-center items-center bg-white card-border-radius p-5">
            <section id="coming-soon" class="my-24">
                <span class="flex flex-row justify-center items-center text-primarycolor-100 text-2xl">Coming Soon</span>
            </section>
        </main>
    </div>
   
</x-app-layout>