
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="w-6/12 mx-auto sm:px-6 lg:px-8">
<form method="POST" action="{{ route('updateProduct', ['id' => $prod->id ]) }}">
@csrf
@method('PUT')
 <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$prod->name}}" required autofocus />
            </div>
            <div>
                <x-label for="product_slug" :value="__('Product_Slug')" />

                <x-input id="slug" class="block mt-1 w-full" type="text" name="slug" value="{{ $prod->slug }}" autofocus />
            </div>
            <div class="mb-6">
                <x-label for="category" :value="__('category')" />
              
                <select id="select3" class="select2 block mt-1 w-full" multiple="multiple" data-live-search="true" name="category_id[]" >
                @forelse ($cat as $cate)  
                <option value="{{$cate->id}}">
                <!-- <option value="{{$cate->id}}" @if( $cate->id == $prod->category()->first()->id ) selected @endif > -->
                    {{$cate->name}}
                    </option>
                    @empty
                        <p>no categories</p>
                    @endforelse
                </select>
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
        </div></div>
</x-app-layout>