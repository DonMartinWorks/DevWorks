<div>
    <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg border-purple-500 border-l-4 border-r-4 border-t-4 border-b-4">
        @forelse ($vacancies as $vacancy)
            <div
                class="p-6 bg-white border-b border-purple-400 hover:bg-purple-100
        md:flex md:justify-between md:items-center">
                <div class="leading-10">
                    <a href="#" class="text-xl font-bold hover:text-purple-600 focus:text-purple-600 uppercase">
                        {{ $vacancy->title }}
                    </a>
                    <p class="text-sm text-gray-600 font-bold">{{ $vacancy->company }}</p>
                    <p class="text-gray-600 font-bold">
                        <a class="text-xs">{{ __('Last Day') }}:</a>
                        <a class="text-sm"
                            title="{{ __('Last Day to apply') }}">{{ $vacancy->last_day->format('d/m/Y') }}</a>
                    </p>
                </div>

                <div class="flex flex-col gap-3 items-stretch mt-5 md:mt-0">
                    <a href="#"
                        class="bg-slate-900 hover:bg-slate-600 focus:bg-slate-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        <span class="text-orange-300 mr-3">0</span> {{ __('Candidates') }}
                    </a>

                    <a href="#"
                        class="bg-slate-900 hover:bg-yellow-500 focus:bg-yellow-500 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                        title="{{ __('Edit') }} {{ $vacancy->title }}">
                        {{ __('Edit') }}
                    </a>

                    <a href="#"
                        class="bg-slate-900 hover:bg-rose-600 focus:bg-rose-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                        title="{{ __('Delete') }} {{ $vacancy->title }}">
                        {{ __('Delete') }}
                    </a>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-purple-700">{{ __('There is no vacancies to show!') }}</p>
        @endforelse
    </div>

    <div class="my-10 ml-5 mr-5">
        {{ $vacancies->links() }}
    </div>
</div>
