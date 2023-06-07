<div class="bg-gray-100 py-10">
    <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5">{{ __('Find the Vacancy') }}
    </h2>

    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent="readData">
            <div class="md:grid md:grid-cols-3 gap-5">
                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="term">{{ __('Search Term') }}
                    </label>
                    <input id="term" type="text" placeholder="{{ __('Search Term Example: Vue') }}"
                        class="rounded-md shadow-sm border-gray-300 focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50 w-full" wire:model="term" />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">{{ __('Category') }}</label>
                    <select wire:model="category" id="role" name="role" class="rounded-md shadow-sm border-gray-300 focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50 w-full text-center">
                        <option selected disabled>{{ __('Select') }}</option>

                        @foreach ($categories as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->category }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">{{ __('Salary') }}</label>
                    <select wire:model="salary" id="role" name="role" class="rounded-md shadow-sm border-gray-300 focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50 w-full text-center">
                        <option selected disabled>{{ __('Select') }}</option>
                        @foreach ($salaries as $salario)
                            <option value="{{ $salario->id }}">{{ $salario->salary }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end">
                <input type="submit"
                    class="bg-purple-600 hover:bg-purple-500 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                    value="{{__('Search')}}" />
            </div>
        </form>
    </div>
</div>
