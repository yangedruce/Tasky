@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-[13px] pt-5 rounded-md border-2 border-gray-900 focus:border-gray-300 focus:ring focus:ring-gray-300 focus:ring-opacity-20 peer']) !!}>
