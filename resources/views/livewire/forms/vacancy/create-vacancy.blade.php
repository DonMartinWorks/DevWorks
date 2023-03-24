<form class="md:w-1/2 space-y-5" wire:submit.prevent="createVacancy">
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
        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" wire:model="image"
            :value="old('image')" required accept="image/*" />

        <div class="my-5">
            @if ($image)
                <b class="mb-4">{{ __('Cover Image') }}</b>

                <img class="flex w-full rounded-2xl border-purple-500 border-l-4 border-r-4 border-t-4 border-b-4" src="{{$image->temporaryUrl()}}" alt="{{ __('Cover Image') }}">
            @else
            @endif
        </div>

        @error('image')
            <livewire:component.show-alert :message="$message" />
        @enderror
    </div>

    <x-primary-button class="mt-5 w-full justify-center py-4">
        {{ __('Create Post') }}
    </x-primary-button>
</form>
