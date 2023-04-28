<title>{{ __('List of Applicants for this Vacancy') }}: {{ $vacancy->title }}</title>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Applicants for this Vacancy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg border-purple-500 border-l-4 border-r-4 border-t-4 border-b-4">
                <div class="p-6 text-gray-900">
                    <h2 class="text-4xl font-bold text-center my-10">{{ __('List of Applicants for this Vacancy') }}:
                        {{ $vacancy->title }}</h2>

                    <div class="md:flex md:justify-center p-5">
                        <ul class="divide-y divide-purple-500 w-full">
                            @forelse ($vacancy->candidates as $candidate)
                                <li class="p-3 flex items-center">
                                    <div class="flex-1">
                                        <p class="text xl font-medium text-gray-800">{{ $candidate->user->name }}</p>
                                        <a href="mailto:{{ $candidate->user->email }}"
                                            class="text md text-purple-600 hover:text-purple-400">{{ __('Email') }}:
                                            <span class="font-semibold">{{ $candidate->user->email }}</span>
                                        </a>
                                        <p class="text md text-gray-500">{{ __('Phone') }}:
                                            <span class="font-semibold">{{ $candidate->user->phone }}</span>
                                        </p>
                                        <p class="text md text-gray-500 font-normal">
                                            {{ __('The day this applicant applied') }}: <span
                                                class="font-semibold">{{ $candidate->created_at->diffForHumans() }}</span>
                                        </p>
                                    </div>

                                    <div>
                                        <a class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-purple-600 text-sm leading-5 font-medium rounded-full text-gray-500 bg-white hover:gr-gray-50"
                                            href="{{ asset('storage/cv/' . $candidate->cv) }}" target="_blank"
                                            rel="noreferrer noopener">{{ __('See CV') }}</a>
                                    </div>
                                </li>
                            @empty
                                <p class="p-3 text-center text-sm text-gray-900 ">
                                    {{ __('there are no candidates for this vacancy') }}
                                </p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
