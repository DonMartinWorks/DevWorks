<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Vacancies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('message'))
                <div class="uppercase bg-teal-400 text-gray-900 font-bold p-2 text-center rounded-lg my-6">
                    {{ session('message') }}
                </div>
            @endif

            <livewire:forms.vacancy.show-vacancies />
        </div>
    </div>
</x-app-layout>
