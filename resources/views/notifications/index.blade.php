<title>{{ __('Notifications') }}</title>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notifications') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg border-purple-500 border-l-4 border-r-4 border-t-4 border-b-4">
                <div class="p-6 text-gray-900">
                    <h2 class="text-4xl font-bold text-center my-10">{{ __('My Notifications') }}</h2>

                    @forelse ($notifications as $notification)
                        <div class="p-5 my-2 border border-gray-500 bg-white hover:bg-gray-300 md:flex md:justify-between md:items-center rounded-2xl">
                            <div>
                                <p class="font-semibold">{{ __('You have a new candidate in the vacancy') }}: <span
                                        class="font-bold text-purple-600 text-lg">{{ $notification->data['vacancy_name'] }}</span>
                                </p>

                                <p class="font-semibold">{{ __('Request received ago') }}: <span
                                        class="font-bold text-purple-600 text-lg">
                                        {{ $notification->created_at->diffForHumans() }}</span>
                                </p>
                            </div>

                            <div class="mt-5 lg:mt-0">
                                <a href="#" class="p-3 bg-purple-600 hover:bg-purple-300 hover:text-gray-700 text-white text-md uppercase font-bold rounded-lg">{{__('See candidate')}}</a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-700 text-md">
                            {{ __('You do not have any new notifications') }}
                        </p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
