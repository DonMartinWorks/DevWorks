<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('See Vacancy') }}: {{ $vacancy->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg border-purple-500 border-l-4 border-r-4 border-t-4 border-b-4">
                <div class="p-6 text-gray-900">
                    <div class="flex">
                        <x-link :href="route('vacancies.index')" class="mz-20">
                            {{ __('Return to the list of vacancies') }}
                        </x-link>
                    </div>

                    <livewire:forms.vacancy.see-vacancy :vacancy="$vacancy" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
