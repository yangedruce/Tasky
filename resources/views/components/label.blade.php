@props(['value'])

<label {{ $attributes->merge(['class' => 'absolute block font-bold text-gray-900 top-2 left-3.5 tracking-wider']) }}>
    {{ $value ?? $slot }}
</label>
