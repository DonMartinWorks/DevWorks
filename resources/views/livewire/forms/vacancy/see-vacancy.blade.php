<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $vacancy->title }}
        </h3>

        <div class="md:grid md:grid-cols-2 p-4">
            <p class="font-semibold text-sm uppercase text-gray-700 my-3">{{ __('Company') }}:
                <span class="font-normal normal-case text-sm text-purple-700">{{ $vacancy->company }}</span>
            </p>

            <p class="font-semibold text-sm uppercase text-gray-700 my-3">{{ __('Last Day to apply') }}:
                <span
                    class="font-normal normal-case text-sm text-purple-700">{{ $vacancy->last_day->toFormattedDateString() }}</span>
            </p>

            <p class="font-semibold text-sm uppercase text-gray-700 my-3">{{ __('Category') }}:
                <span class="font-normal normal-case text-sm text-purple-700">{{ $vacancy->category->category }}</span>
            </p>

            <p class="font-semibold text-sm uppercase text-gray-700 my-3">{{ __('Salary') }}:
                <span class="font-normal normal-case text-sm text-purple-700">{{ $vacancy->salary->salary }}</span>
            </p>
        </div>
    </div>

    <div class="md:grid md:grid-cols-6 gap-5">
        <div class="md:col-span-2">
            <img class="flex w-auto border-purple-500 border-l-4 border-r-4 border-t-4 border-b-4"
                src="{{ asset('storage/vacancies/' . $vacancy->image) }}"
                alt="{{ __('Vacancy Image') . ' ' . $vacancy->title }}">
        </div>

        <div class="md:col-span-4">
            <h3 class="text-2xl font-bold">{{ __('Vacancy Description') }}</h3>
            <p class="my-5 font-semibold">{{ $vacancy->description }}</p>
        </div>
    </div>

    @guest
        <div
            class="mt-5 bg-white border-dashed text-center border-purple-500 border-l-4 border-r-4 border-t-4 border-b-4 rounded-2xl">
            <p class="my-5"><span class="font-bold">{{ __('Do you want to apply for this vacancy?') }}</span><a
                    href="{{ route('login') }}">
                    <span class="font-semibold text-sky-600 hover:text-sky-800 hover:underline">
                        {{ __('With your account you can apply for this and other vacancies') }}
                    </span>
                </a>
            </p>
        </div>
    @endguest

    @auth
        @cannot('create', App\Models\Vacancy::class)
            <livewire:forms.vacancy.apply-vacancy />
        @endcannot
    @endauth
</div>
