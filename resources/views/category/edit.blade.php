
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="w-6/12 mx-auto sm:px-6 lg:px-8">
<form method="POST" action="{{ route('updateCategory',  ['id' => $cat->id ]) }}">
@csrf
@method('PUT')
 <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$cat->name}}" required autofocus />
            </div>
            <div>
                <x-label for="meta_title" :value="__('meta_Title')" />

                <x-input id="meta_title" class="block mt-1 w-full" type="text" name="meta_title" value="{{ $cat->meta_title }}" required autofocus />
            </div>
            <div>
                <x-label for="meta_description" :value="__('meta_description')" />

                <x-input id="meta_description" class="block mt-1 w-full" type="text" name="meta_description" value="{{ $cat->meta_description }}"  required autofocus />
            </div>
            <div>
                <x-label for="meta_keywords" :value="__('meta_keywords')" />
                <x-input id="meta_keywords" class="block mt-1 w-full" type="text" name="meta_keywords[]" value="{{ $cat->meta_keywords}}" required autofocus />
            </div>

           
            <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
        </div></div>
</x-app-layout>