@props(['path' => '#', 'label'])
@php
    $classes = "uppercase text-xl border-b-1 p-1 hover:bg-amber-700/10 transition-colors delay-300"
@endphp
<a {{$attributes->merge(['class' => $classes])}} href="{{$path}}">
    {{ $label }}
</a>

