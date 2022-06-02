
<x-app-layout>
<x-slot name="header">
<div class="grid grid-cols-2 gap-6 mx-auto">
                    <div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Product') }}
        </h2>
        </div>
                    <div class="grid justify-items-end">
                    <a href="/products" class="btn btn-primary text-center text-white bg-green px-4 py-4 rounded-md capitalize" type="submit" >Back</a>
                    </div>
                </div>
    </x-slot>
    <div class="py-12">
        <div class="w-6/12 mx-auto sm:px-6 lg:px-8">
<form method="POST" action="{{ route('saveProduct') }}">
@csrf
 <!-- Name -->
            <div class="mb-6">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <div class="mb-6">
                <x-label for="slug" :value="__('slug')" />

                <x-input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug')" autofocus />
            </div>
            <div class="mb-6">
                <x-label for="category" :value="__('category')" />
              
                <select id="select2" class="select2 block mt-1 w-full" multiple="multiple" data-live-search="true" name="category_id[]"  required>
                @foreach ($categories as $category)  
                <option value="{{$category->id}}">
                    {{$category->name}}
                    </option>
                    @endforeach  
                </select>
         
            </div>

           
            <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form></div></div>
</x-app-layout>
