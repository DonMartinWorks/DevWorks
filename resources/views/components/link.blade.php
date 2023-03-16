@php
    $classes = 'text-sm text-gray-600 hover:text-lime-600 font-bold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
