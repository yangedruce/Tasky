@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-bold text-[13px] text-green-600 tracking-wider']) }}>
        {{ $status }}
    </div>
@endif
