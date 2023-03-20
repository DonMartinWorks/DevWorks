<form class="md:w-1/2 space-y-5">
    <!-- Title -->
    <div class="mt-4">
        <x-input-label for="title_vacancy" :value="__('Title')" />
        <x-text-input id="title_vacancy" class="block mt-1 w-full" type="text" name="title_vacancy" :value="old('title_vacancy')"
            required />
        <x-input-error :messages="$errors->get('title_vacancy')" class="mt-2" />
    </div>

    <!-- Salary -->
    <div class="mt-4">
        <x-input-label for="salary" :value="__('Salary')" />
        <x-select id="salary" name="salary" class="block mt-1 w-full text-center"
            placeholder="{{ __('Select your salary') }}">
        </x-select>
        <x-input-error :messages="$errors->get('salary')" class="mt-2" />
    </div>

    <!-- Category -->
    <div class="mt-4">
        <x-input-label for="category" :value="__('Category')" />
        <x-select id="category" name="category" class="block mt-1 w-full text-center"
            placeholder="{{ __('Select your category') }}">
        </x-select>
        <x-input-error :messages="$errors->get('category')" class="mt-2" />
    </div>

    <!-- Company -->
    <div class="mt-4">
        <x-input-label for="company" :value="__('Company')" />
        <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')"
            required />
        <x-input-error :messages="$errors->get('company')" class="mt-2" />
    </div>

    <!-- Last Day -->
    <div class="mt-4">
        <x-input-label for="last_day" :value="__('Last Day to apply')" />
        <x-text-input id="last_day" class="block mt-1 w-full" type="date" name="last_day" :value="old('last_day')"
            required />
        <x-input-error :messages="$errors->get('last_day')" class="mt-2" />
    </div>

    <!-- Description -->
    <div class="mt-4">
        <x-input-label for="last_day" :value="__('Description')" />
        <textarea name="description" id=""
            class="border-gray-300 focus:border-purple-600 focus:ring-purple-600 rounded-md shadow-sm block mt-1 w-full h-60"></textarea>
        <x-input-error :messages="$errors->get('last_day')" class="mt-2" />
    </div>

    <!-- Cover Image -->
    <div class="mt-4">
        <x-input-label for="image" :value="__('Cover Image')" />
        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')"
            required />
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
    </div>

    <x-primary-button class="mt-5 w-full justify-center py-4">
        {{ __('Register') }}
    </x-primary-button>
</form>
