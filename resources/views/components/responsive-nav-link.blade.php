@props(['active'])

@php
$classes = 'px-4 py-2.5 hover:bg-gray-600 w-full'
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
