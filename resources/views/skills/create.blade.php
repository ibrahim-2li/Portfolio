<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Store New Skills
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="w-full mx-auto sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />

            <form method="POST" action="{{ route('skills.store')}}" class="p-4" enctype="multipart/form-data">
                @csrf
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                      autofocus  />
                </div>

                <!-- Image -->
                <div class="mt-4">
                    <x-input-label for="image" :value="__('Image')" />

                    <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"/>
                </div>
                <div class="flex items-center justify-end mt-4">

                    <x-primary-button class="ms-3">
                        Store
                    </x-primary-button>
                    <div>
            </form>



        </div>
    </div>
</x-app-layout>
