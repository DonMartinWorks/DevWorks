@props([
    'placeholder' => null,
])
<div class="flex">
    <select
        {{ $attributes->merge(['class' => 'border-gray-300 focus:border-purple-600 focus:ring-purple-600 rounded-md shadow-sm']) }}>
        @if ($placeholder)
            <option value="" disabled selected>{{ $placeholder }}</option>
        @endif
        {{ $slot }}
    </select>
</div>
