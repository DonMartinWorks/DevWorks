@props([
    'placeholder' => null,
])
<div class="flex">
    <select
        {{ $attributes->merge(['class' => 'border-gray-300 focus:border-lime-600 focus:ring-lime-600 rounded-md shadow-sm']) }}>
        @if ($placeholder)
            <option value="" disabled selected>{{ $placeholder }}</option>
        @endif
        {{ $slot }}
    </select>
</div>
