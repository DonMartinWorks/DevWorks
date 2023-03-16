@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-lime-600 focus:ring-lime-600 rounded-md shadow-sm']) !!}>
