
<x-app-layout>
<x-slot name="header">
<div class="grid grid-cols-2 gap-6 mx-auto">
                    <div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Category') }}
        </h2>
                    </div>
                    <div class="grid justify-items-end">
                    <a href="/categories" class="btn btn-primary text-center text-white bg-green px-4 py-4 rounded-md capitalize" type="submit" >Back</a>
                    </div>
                </div>
    </x-slot>
    <div class="py-12">
        <div class="w-6/12 mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('saveCategory') }}">
            @csrf
 <!-- Name -->
            <div class="mb-6">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Enter category name" :value="old('name')" required autofocus />
            </div>
            <div class="mb-6">
                <x-label for="meta_title" :value="__('meta_Title')" />

                <x-input id="meta_title" class="block mt-1 w-full" type="text" name="meta_title" placeholder="Enter meta title" :value="old('name')" required autofocus />
            </div>
            <div class="mb-6">
                <x-label for="meta_description" :value="__('meta_description')" />

                <x-input id="meta_description" class="block mt-1 w-full" type="text" name="meta_description" placeholder="Enter meta description" :value="old('name')" required autofocus />
            </div>
            <div class="mb-6">
                <x-label for="meta_keywords" :value="__('meta_keywords')" />

                <x-input id="meta_keywords" class="block mt-1 w-full" type="text" name="meta_keywords[]" :value="old('name')" placeholder="Enter keywords comma separated" required autofocus />
            </div>

           
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>
        </div>
    </div>
</x-app-layout>