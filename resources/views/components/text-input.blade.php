@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'focus:border-primarycolor-100 focus:ring-primarycolor-100 rounded-md shadow-sm']) !!}>
