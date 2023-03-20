<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Vacancy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-4xl font-bold text-center my-10">{{ __('Post Vacancy') }}</h2>

                    <div class="md:flex md:justify-center p-5">
                        <livewire:component.create-vacancy />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
