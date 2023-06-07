<div>
    <livewire:component.vacancies-filter />

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-700 mb-6 mt-12">{{ __('Our available vacancies') }}</h3>

            <div class="bg-white shadow-sm rounded-lg p-6 divide-y divide-gray-500">
                @forelse ($vacancies as $vacancy)
                    <div class="md:flex md:justify-between md:items-center py-5">
                        <div class="md:flex-1">
                            <a href="{{ route('vacancies.show', $vacancy->id) }}"
                                class="text-3xl font-extrabold text-gray-600">
                                {{ $vacancy->title }}
                            </a>
                            <p class="my-2 text-base font-bold text-purple-600">{{ $vacancy->company }}</p>
                            <p class="my-2 text-xs font-bold text-stone-400">{{ __('Category') }}:
                                {{ $vacancy->category->category }}</p>
                            <p class="my-2 text-xs font-bold text-stone-400">{{ __('Salary') }}:
                                {{ $vacancy->salary->salary }}</p>
                            <p>{{ __('Last Day to apply') }}: <span
                                    class="font-extrabold">{{ $vacancy->last_day->format('d/m/Y') }}</span></p>
                        </div>

                        <div>
                            <a class="px-4 py-1 bg-purple-600 hover:bg-purple-300 hover:text-gray-700 text-white text-md capitalize font-bold rounded-lg block text-center"
                                href="{{ route('vacancies.show', $vacancy->id) }}">{{ __('See Vacancy') }}</a>
                        </div>
                    </div>
                @empty
                    <p class="p-4 text-center text-sm text-purple-600">{{ __('There is no vacancies to show!') }}</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
