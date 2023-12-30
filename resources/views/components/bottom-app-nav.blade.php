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

    <a href="{{route('app.cards')}}" class="{{Request::url() === route('app.cards') ? 'active text-primarycolor-100' : ''}} cursor-pointer">
        <span class="rounded-lg bg-iconbg-50 p-1">
            <x-polaris-major-credit-card class="h-6 w-6 text-primarycolor-100" />
        </span>
      <span class="btm-nav-label text-xs">Cards</span>
    </a>

    <a href="{{route('app.me')}}" class="{{Request::url() === route('app.me') ? 'active text-primarycolor-100' : ''}} cursor-pointer">
        <span class="rounded-lg bg-iconbg-50 p-1">
            <x-polaris-major-customers class="h-6 w-6 text-primarycolor-100" />
        </span>
        <span class="btm-nav-label text-xs">Me</span>
    </a>
</div>