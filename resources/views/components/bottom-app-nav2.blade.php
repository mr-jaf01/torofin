<div class="btm-nav rounded-full">

    <a href="{{route('app.home')}}" class=" {{Request::url() === route('app.home') ? 'active text-primarycolor-100' : ''}}  cursor-pointer">
        <span class="rounded-lg bg-iconbg-50 p-1">
            <x-polaris-major-home  class="h-6 w-6 text-primarycolor-100" />
        </span>
      <span class="btm-nav-label text-xs">Home</span>
    </a>
    
    <a href="{{route('app.rewards')}}" class="{{Request::url() === route('app.rewards') ? 'active text-primarycolor-100' : ''}} cursor-pointer">
        <span class="rounded-lg bg-iconbg-50 p-1">
            <x-polaris-major-cash-dollar class="h-6 w-6 text-primarycolor-100" />
        </span>
      <span class="btm-nav-label text-xs">Rewards</span>
    </a>


    <a href="{{route('app.profile')}}" class="{{Request::url() === route('app.profile') ? 'active text-primarycolor-100' : ''}} cursor-pointer">
        <span class="rounded-lg bg-iconbg-50 p-1">
            <x-polaris-major-customers class="h-6 w-6 text-primarycolor-100" />
        </span>
        <span class="btm-nav-label text-xs">Profile</span>
    </a>
</div>