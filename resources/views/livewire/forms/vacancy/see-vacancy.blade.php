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
                <span class="font-normal normal-case text-sm text-purple-700">{{ $vacancy->category_id }}</span>
            </p>

            <p class="font-semibold text-sm uppercase text-gray-700 my-3">{{ __('Salary') }}:
                <span class="font-normal normal-case text-sm text-purple-700">{{ $vacancy->salary_id }}</span>
            </p>
        </div>
    </div>
</div>
