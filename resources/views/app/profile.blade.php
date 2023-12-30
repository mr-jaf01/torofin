<x-app-layout>

    <div id="profile-section" class="px-2 py-4 mb-28 overflow-y-auto">

        <x-app-header>
            My Profile
        </x-app-header>

        <main class="flex flex-col">

            <section id="account-info" class="flex flex-col gap-2 my-2">
                
                <div class="card-border-radius bg-white shadow-sm p-5 flex flex-col gap-4 text-primarycolor-100">
                     
                    <div class="flex flex-row justify-between items-center">
                        <span class="text-xs text-gray-400">Account Number</span>
                        <span class="text-sm">{{$wallet->account_number}}</span>
                     </div>

                     <div class="flex flex-row justify-between items-center">
                        <span class="text-xs text-gray-400">Account Tier</span>
                        <span class="text-sm">Tier 1</span>
                     </div>

                     <div class="flex flex-row justify-between items-center">
                        <span class="text-xs text-gray-400">BVN</span>
                        <span class="text-sm">---</span>
                     </div>

                </div>
                
            </section>

            <section id="profile-info" class="flex flex-col gap-4 shadow-sm text-primarycolor-100 card-border-radius p-5 bg-white">
               
                
                <div class="flex flex-row justify-center items-center gap-2 w-full">
                    <div class="rounded-full bg-primarycolor-100 text-white p-1 h-12 w-12 flex flex-row justify-center items-center">
                        {{Auth::user()->name[0]}}
                    </div>
                </div>
                

                <div class="flex flex-row justify-between items-center">
                    <span class="text-xs text-gray-400">Full Name</span>
                    <span class="text-sm ">{{Auth::user()->name}}</span>
                </div>

                <div class="flex flex-row justify-between items-center">
                    <span class="text-xs text-gray-400">Mobile Number</span>
                    <span class="text-sm ">{{Auth::user()->phone}}</span>
                </div>

                <div class="flex flex-row justify-between items-center">
                    <span class="text-xs text-gray-400">Nick Name</span>
                    <span class="text-sm ">---</span>
                 </div>

                 <div class="flex flex-row justify-between items-center">
                    <span class="text-xs text-gray-400">Gender</span>
                    <span class="text-sm ">--</span>
                 </div>

                 <div class="flex flex-row justify-between items-center">
                    <span class="text-xs text-gray-400">Date of Birth</span>
                    <span class="text-sm ">--</span>
                 </div>

                 <div class="flex flex-row justify-between items-center">
                    <span class="text-xs text-gray-400">Email</span>
                    <span class="text-sm ">{{Auth::user()->email}}</span>
                 </div>

                 <div class="flex flex-row justify-between items-center">
                    <span class="text-xs text-gray-400">Address</span>
                    <span class="text-sm ">--</span>
                 </div>

            </section>

        </main>

    </div>


</x-app-layout>