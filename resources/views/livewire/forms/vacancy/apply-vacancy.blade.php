<div
    class="bg-white p-5 mt-10 flex flex-col justify-center items-center border-purple-500 border-l-4 border-r-4 border-t-4 border-b-4 rounded-2xl">
    <h2 class="text-center text-2xl font-bold my-4">{{ __('Apply for this vacancy') }}</h2>

    <form class="w-96 mt-5">
        <div class="mb-4">
            <x-input-label for="cv" :value="__('Curriculum Vitae (PDF)')" />
            <x-text-input id="cv" type="file" accept=".pdf" class="block mt-1 w-full" />
        </div>
    </form>
</div>