<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-primarycolor-100 border border-transparent rounded-md font-semibold text-xs text-white  uppercase tracking-widest hover:bg-secondarycolorcolor-100  focus:outline-none focus:ring-primarycolor-100 focus:ring-primarycolor-100 focus:ring-offset-2  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

