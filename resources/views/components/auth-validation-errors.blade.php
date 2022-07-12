@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-bold text-red-600 text-[13px] tracking-wider">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-[13px] text-red-600 tracking-wider">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
