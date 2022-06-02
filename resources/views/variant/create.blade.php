
<x-app-layout>
<x-slot name="header">
<div class="grid grid-cols-2 gap-6 mx-auto">
                    <div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Variants') }}
        </h2>
        </div>
                    <div class="grid justify-items-end">
                    <a href="/products" class="btn btn-primary text-center text-white bg-green px-4 py-4 rounded-md capitalize" type="submit" >Back</a>
                    </div>
                </div>
    </x-slot>
    <div class="py-12">
        <div class="w-6/12 mx-auto sm:px-6 lg:px-8">
    <form method="POST" action="{{ route('saveVariant') }}">
       @csrf

           
       <div class="mb-6">
                <x-input id="product_id" class="block mt-1 w-full" type="text" name="product_id" value="{{ $products->id }}" required />
            </div> 
            <div>
               <x-label for="sap_product_code" :value="__('sap_product_code')" />
               <x-input id="sap_product_code" class="block mt-1 w-full" type="text" name="sap_product_code" :value="old('sap_product_code')" autofocus />
           </div>
           <div class="mb-6">
               <x-label for="web_product_code" :value="__('web_product_code')"/>
               <x-input id="web_product_code" class="block mt-1 w-full" type="text" name="web_product_code" :value="old('web_product_code')" required autofocus />
           </div>
           <div class="mb-6">
               <x-label for="name" :value="__('Name')" />
 
               <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
           </div>
           <div class="flex items-center justify-end mt-4">
               <x-button class="ml-4">
                   {{ __('Save') }}
               </x-button>
           </div>
        </form></div></div>
</x-app-layout>
