<div
    class="bg-white p-5 mt-10 flex flex-col justify-center items-center border-purple-500 border-l-4 border-r-4 border-t-4 border-b-4 rounded-2xl">
    <h2 class="text-center text-2xl font-bold my-4">{{ __('Apply for this vacancy') }}</h2>

    @if (session()->has('message'))
        <p class="uppercase border border-green-600 border-l-4 border-r-4 border-t-4 border-b-4 bg-gray-100 text-green-600 font-bold p-2 my-5 mx-5 text-md rounded-2xl">
            {{ session('message') }}
        </p>
    @else
        <form wire:submit.prevent='apply' class="w-96 mt-5">
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Curriculum Vitae (PDF)')" />
                <x-text-input id="cv" type="file" wire:model="cv" accept=".pdf" class="block mt-1 w-full" />
            </div>

            @error('cv')
                <livewire:component.show-alert :message="$message" />
            @enderror

            <x-primary-button class="my-5 w-full justify-center items-center">
                {{ __('Apply for this vacancy') }}
            </x-primary-button>
        </form>
    @endif

</div>
