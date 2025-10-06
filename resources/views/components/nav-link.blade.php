@props(['route'])

@php
    $isActive = request()->routeIs($route);
@endphp

<a
    href="{{ route($route) }}"
    {{ $attributes->merge([
        'class' => ($isActive ? 'text-blue-500 font-semibold' : 'text-gray-700 hover:text-blue-400') . ' transition'
    ]) }}
>
    {{ $slot }}
</a>
