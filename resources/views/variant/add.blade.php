
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Variants') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('storeVariant', ['id' => $product->id ] ) }}">
       @csrf

 <!-- Name -->

            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="product_id" class="block mt-1 w-full" type="text" name="product_id" :value="{{$product->id}}" required />
            </div> 
           
<div>
               <x-label for="sap_product_code" :value="__('sap_product_code')" />
               <x-input id="sap_product_code" class="block mt-1 w-full" type="text" name="sap_product_code" :value="old('sap_product_code')" required autofocus />
           </div>
           <div>
               <x-label for="web_product_code" :value="__('web_product_code')"/>
               <x-input id="web_product_code" class="block mt-1 w-full" type="text" name="web_product_code" :value="old('web_product_code')" required autofocus />
           </div>
           <div>
               <x-label for="name" :value="__('Name')" />
 
               <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
           </div>
           <div class="flex items-center justify-end mt-4">
               <x-button class="ml-4">
                   {{ __('Save') }}
               </x-button>
           </div>
        </form>
</x-app-layout>
