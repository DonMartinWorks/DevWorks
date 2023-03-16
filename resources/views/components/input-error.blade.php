@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-red-600 w-full py-1 text-md bg-red-600 text-white text-center rounded-md']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
