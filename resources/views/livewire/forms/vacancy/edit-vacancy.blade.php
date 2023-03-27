<form class="md:w-1/2 space-y-5" wire:submit.prevent="editVacancy">
    <!-- Title -->
    <div class="mt-4">
        <x-input-label for="title" :value="__('Title')" />
        <x-text-input id="title" class="block mt-1 w-full" type="text" wire:model="title" :value="old('title')"
            required />

        @error('title')
            <livewire:component.show-alert :message="$message" />
        @enderror
    </div>

    <!-- Salary -->
    <div class="mt-4">
        <x-input-label for="salary" :value="__('Salary')" />
        <x-select id="salary" name="salary" class="block mt-1 w-full text-center"
            placeholder="{{ __('Select your salary') }}" wire:model="salary">
            @foreach ($salaries as $salary)
                <option value="{{ $salary->id }}">{{ $salary->salary }}</option>
            @endforeach
        </x-select>

        @error('salary')
            <livewire:component.show-alert :message="$message" />
        @enderror
    </div>

    <!-- Category -->
    <div class="mt-4">
        <x-input-label for="category" :value="__('Category')" />
        <x-select id="category" name="category" class="block mt-1 w-full text-center"
            placeholder="{{ __('Select your category') }}" wire:model="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
            @endforeach
        </x-select>

        @error('category')
            <livewire:component.show-alert :message="$message" />
        @enderror
    </div>

    <!-- Company -->
    <div class="mt-4">
        <x-input-label for="company" :value="__('Company')" />
        <x-text-input id="company" class="block mt-1 w-full" type="text" wire:model="company" name="company"
            :value="old('company')" required />

        @error('company')
            <livewire:component.show-alert :message="$message" />
        @enderror
    </div>

    <!-- Last Day -->
    <div class="mt-4">
        <x-input-label for="last_day" :value="__('Last Day to apply')" />
        <x-text-input id="last_day" class="block mt-1 w-full" type="date" wire:model="last_day" name="last_day"
            :value="old('last_day')" required />

        @error('last_day')
            <livewire:component.show-alert :message="$message" />
        @enderror
    </div>

    <!-- Description -->
    <div class="mt-4">
        <x-input-label for="description" :value="__('Description')" />
        <x-textarea name="description" id="description" class="h-48" wire:model="description" required />

        @error('description')
            <livewire:component.show-alert :message="$message" />
        @enderror
    </div>

    <!-- Cover Image -->
    <div class="mt-4">
        <x-input-label for="image" :value="__('Cover Image')" />
        <x-text-input id="image" class="block mt-1 w-full" type="file" wire:model="new_image" :value="old('image')"
            accept="image/*" />

        <div class="my-5">
            <x-input-label :value="__('Actual Cover')" />

            <img class="flex w-full rounded-2xl border-purple-500 border-l-4 border-r-4 border-t-4 border-b-4"
                src="{{ asset('storage/vacancies/' . $image) }}" alt="{{ __('Vacancy Image') . ' ' . $title }}">
        </div>

        @error('new_image')
            <livewire:component.show-alert :message="$message" />
        @enderror
    </div>

    <div class="my-5">
        @if ($new_image)
            <x-input-label :value="__('New Image')" />
            <img class="flex w-full rounded-2xl border-purple-500 border-l-4 border-r-4 border-t-4 border-b-4" src="{{ $new_image->temporaryUrl() }}" alt="{{ __('New Image') }}">
        @else
        @endif
    </div>


    <x-primary-button class="mt-5 w-full justify-center py-4">
        {{ __('Edit Post') }}
    </x-primary-button>
</form>
