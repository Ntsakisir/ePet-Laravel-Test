
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Variant') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="w-6/12 mx-auto sm:px-6 lg:px-8">
<form method="POST" action="{{ route('updateVariant', ['id' => $prodvariant->id ]) }}">
@csrf
@method('PUT')
 <!-- Name -->
            <div>
                <x-input id="product_id" class="block mt-1 w-full" type="text" name="product_id" value="{{$prodvariant->product_id}}" required />
            </div> 
            <div class="mb-6">
                <x-label for="sap_product_code" :value="__('Sap Product Code')" />
                <x-input id="sap_product_code" class="block mt-1 w-full" type="text" name="sap_product_code" value="{{ $prodvariant->sap_product_code }}" autofocus />
            </div>
            <div class="mb-6">
                <x-label for="web_product_code" :value="__('Web Product Code')" />
                <x-input id="web_product_code" class="block mt-1 w-full" type="text" name="web_product_code" value="{{ $prodvariant->web_product_code }}" autofocus />
            </div>
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$prodvariant->name}}" required autofocus />
            </div>   
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
        </div></div>
</x-app-layout>