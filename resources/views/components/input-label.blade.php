@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-md text-gray-700 hover:text-purple-600']) }}>
    {{ $value ?? $slot }}
</label>
