{{-- <x-test tag="h1">Text</x-test> --}}
{{-- <x-test tag="h2">Text</x-test> --}}

{{-- @props([
    'tag' => 'h1',
    'class' => ''
]) --}}

{{-- @switch($tag)
    @case($tag == "h1")
        @php($class = "text-4xl")
        @break
    @case($tag == "h2")
        @php($class = "text-3xl")
        @break
    @case($tag == "h3")
        @php($class = "text-2xl")
        @break
    @case($tag == "h4")
        @php($class = "text-xl")
        @break
    @case($tag == "h5")
        @php($class = "text-lg")
        @break

    @default
        
@endswitch --}}

{{-- @php
    switch($tag) {
        case "h1":
            $class = "text-4xl";
            break;
        case "h2":
            $class = "text-3xl";
            break;
        case "h3":
            $class = "text-2xl";
            break;
        case "h4":
            $class = "text-xl";
            break;
        default:
            break;
    }
@endphp

<{{$tag}} {{$attributes->merge(['class' => $class])}}>
 {{$slot}}
</{{$tag}}> --}}